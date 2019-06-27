<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Content;
use App\ContentColumn;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project_id)
    {
        $project = Project::find($project_id);
        if ($project) {
            $contents = $project->contents;
            return view('backoffice.projects.content.index')->with('project', $project)->with('contents', $contents);
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id)
    {
        $project = Project::find($project_id);
        if ($project) {
            return view('backoffice.projects.content.create')->with('project', $project);
        }
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
    {
        $request->validate([
            'column_type_1' => 'required',
            'column_text_1' => 'string|nullable',
            'column_video_1' => 'mimetypes:video/mp4',
            'column_default_1' => 'mimes:jpeg,jpg,png',
            'column_image_1' => 'mimes:jpeg,jpg,png',

            'column_type_2' => 'nullable',
            'column_text_2' => 'string|nullable',
            'column_video_2' => 'mimetypes:video/mp4',
            'column_default_2' => 'mimes:jpeg,jpg,png',
            'column_image_2' => 'mimes:jpeg,jpg,png',

            'column_type_3' => 'nullable',
            'column_text_3' => 'string|nullable',
            'column_video_3' => 'mimetypes:video/mp4',
            'column_default_3' => 'mimes:jpeg,jpg,png',
            'column_image_3' => 'mimes:jpeg,jpg,png',

            'column_type_4' => 'nullable',
            'column_text_4' => 'string|nullable',
            'column_video_4' => 'mimetypes:video/mp4',
            'column_default_4' => 'mimes:jpeg,jpg,png',
            'column_image_4' => 'mimes:jpeg,jpg,png',
        ]);

        $column_types = [
            $request->column_type_1,
            $request->column_type_2,
            $request->column_type_3,
            $request->column_type_4,
        ];

        $column_texts = [
            $request->column_text_1,
            $request->column_text_2,
            $request->column_text_3,
            $request->column_text_4,
        ];

        $column_videos = [
            $request->file('column_video_1'),
            $request->file('column_video_2'),
            $request->file('column_video_3'),
            $request->file('column_video_4'),
        ];

        $column_defaults = [
            $request->file('column_default_1'),
            $request->file('column_default_2'),
            $request->file('column_default_3'),
            $request->file('column_default_4'),
        ];

        $column_images = [
            $request->file('column_image_1'),
            $request->file('column_image_2'),
            $request->file('column_image_3'),
            $request->file('column_image_4'),
        ];

        $project = Project::find($project_id);

        $content = new Content();
        $content->project_id = $project_id;
        $content->order = $project->contents->count() + 1;
        $content->save();

        for ($i=0; $i < count($column_types); $i++) {
            $content_column = new ContentColumn();
            $content_column->type = $column_types[$i];
            switch ($column_types[$i]) {
                case '1':
                    $content_column->column = $column_texts[$i];
                    $content_column->content_id = $content->id;
                    if ($column_texts[$i]) {
                        $content_column->save();
                    }
                    break;
                case '2':
                    if ($column_videos[$i]) {
                        $path = $column_videos[$i]->storeAs('public/projects', uniqid() . '_column_video.'.$column_videos[$i]->getClientOriginalExtension());
                        $content_column->column = $path;
                    }
                    if ($column_defaults[$i]) {
                        $path = $column_defaults[$i]->storeAs('public/projects', uniqid() . '_column_video.'.$column_defaults[$i]->getClientOriginalExtension());
                        $content_column->default = $path;                        
                    }
                    $content_column->content_id = $content->id;
                    if ($column_videos[$i] || $column_defaults[$i]) {
                        $content_column->save();
                    }
                    break;
                case '3':
                    $content_column->content_id = $content->id;
                    if ($column_images[$i]) {
                        $path = $column_images[$i]->storeAs('public/projects', uniqid() . '_column_image.'.$column_images[$i]->getClientOriginalExtension());
                        $content_column->column = $path;
                        $content_column->save();
                    }
                    break;
            }
        }
        return redirect(route('backoffice.projects.contents.index', $project->id))->with('status', 'Content updated successfuly');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project_id, $content_id)
    {
        $project = Project::find($project_id);
        if ($project) {
            $content = Content::find($content_id);
            return view('backoffice.projects.content.edit')->with('project', $project)->with('content', $content);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id, $content_id)
    {
        $request->validate([
            'column_type_1' => 'required',
            'column_text_1' => 'string|nullable',
            'column_video_1' => 'mimetypes:video/mp4',
            'column_default_1' => 'mimes:jpeg,jpg,png',
            'column_image_1' => 'mimes:jpeg,jpg,png',

            'column_type_2' => 'nullable',
            'column_text_2' => 'string|nullable',
            'column_video_2' => 'mimetypes:video/mp4',
            'column_default_2' => 'mimes:jpeg,jpg,png',
            'column_image_2' => 'mimes:jpeg,jpg,png',

            'column_type_3' => 'nullable',
            'column_text_3' => 'string|nullable',
            'column_video_3' => 'mimetypes:video/mp4',
            'column_default_3' => 'mimes:jpeg,jpg,png',
            'column_image_3' => 'mimes:jpeg,jpg,png',

            'column_type_4' => 'nullable',
            'column_text_4' => 'string|nullable',
            'column_video_4' => 'mimetypes:video/mp4',
            'column_default_4' => 'mimes:jpeg,jpg,png',
            'column_image_4' => 'mimes:jpeg,jpg,png',
        ]);

        $column_types = [
            $request->column_type_1,
            $request->column_type_2,
            $request->column_type_3,
            $request->column_type_4,
        ];

        $column_texts = [
            $request->column_text_1,
            $request->column_text_2,
            $request->column_text_3,
            $request->column_text_4,
        ];

        $column_videos = [
            $request->file('column_video_1'),
            $request->file('column_video_2'),
            $request->file('column_video_3'),
            $request->file('column_video_4'),
        ];

        $column_defaults = [
            $request->file('column_default_1'),
            $request->file('column_default_2'),
            $request->file('column_default_3'),
            $request->file('column_default_4'),
        ];

        $column_images = [
            $request->file('column_image_1'),
            $request->file('column_image_2'),
            $request->file('column_image_3'),
            $request->file('column_image_4'),
        ];

        $project = Project::find($project_id);

        $content = Content::find($content_id);
        $content->project_id = $project_id;
        $content->order = $project->contents->count() + 1;
        $content->save();

        for ($i=0; $i < count($content->columns->count()); $i++) {
            $content_column = $content->columns[$i];
            $content_column->type = $column_types[$i];
            switch ($column_types[$i]) {
                case '1':
                    $content_column->column = $column_texts[$i];
                    $content_column->content_id = $content->id;
                    if ($column_texts[$i]) {
                        $content_column->save();
                    }
                    break;
                case '2':
                    if ($column_videos[$i]) {
                        $path = $column_videos[$i]->storeAs('public/projects', uniqid() . '_column_video.'.$column_videos[$i]->getClientOriginalExtension());
                        $content_column->column = $path;
                    }
                    if ($column_defaults[$i]) {
                        $path = $column_defaults[$i]->storeAs('public/projects', uniqid() . '_column_video.'.$column_defaults[$i]->getClientOriginalExtension());
                        $content_column->default = $path;                        
                    }
                    $content_column->content_id = $content->id;
                    if ($column_videos[$i] || $column_defaults[$i]) {
                        $content_column->save();
                    }
                    break;
                case '3':
                    $content_column->content_id = $content->id;
                    if ($column_images[$i]) {
                        $path = $column_images[$i]->storeAs('public/projects', uniqid() . '_column_image.'.$column_images[$i]->getClientOriginalExtension());
                        $content_column->column = $path;
                        $content_column->save();
                    }
                    break;
            }
        }
        return redirect(route('backoffice.projects.contents.index', $project->id))->with('status', 'Content updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id, $content_id)
    {
        $content = Content::find($content_id);
        if ($content) {
            foreach ($content->columns as $column) {
                $column->delete();
            }
            $content->delete();
            return back()->with('status', 'Contact deleted successfuly');
        }

        abort(404);
    }

    public function down($project_id, $content_id)
    {
        $down_content = Content::find($content_id);
        if ($down_content) {
            $up_content = Content::where('project_id', $project_id)->where('order', $down_content->order+1)->first();
            if ($up_content) {

                $up_content->order--;
                $up_content->save();
                $down_content->order++;
                $down_content->save();
            }
        }
        return back();
    }

    public function up($project_id, $content_id)
    {
        $down_content = Content::find($content_id);
        if ($down_content) {
            $up_content = Content::where('project_id', $project_id)->where('order', $down_content->order-1)->first();
            if ($up_content) {
                $up_content->order++;
                $up_content->save();
                $down_content->order--;
                $down_content->save();
            }
        }
        return back();
    }
}
