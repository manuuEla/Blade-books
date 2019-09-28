<!-- Modal -->
<div class="modal fade" id="edit-book-{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/book/save/{{$book->id}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="TITLE..." name="title" class="form-control" value="{{$book->title}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="category_id" class="form-control">
                                    <option value="">--Va rugam alegeti o optiune--</option>
                                    @foreach(\App\Author::all() as $author)
                                        <option @if($author->id==$book->author_id) selected @endif
                                        value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="category_id" class="form-control">
                                    <option value="">--Va rugam alegeti o optiune--</option>
                                    @foreach(\App\Category::all() as $category)
                                        <option @if($category->id==$book->category_id) selected @endif
                                        value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea placeholder="DESCRIPTION..." name="description" class="form-control" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="ISBN..." name="isbn" class="form-control" value="{{$book->isbn}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="PUBLISHER..." name="publisher" class="form-control" value="{{$book->publisher}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" placeholder="RELEASED..." name="released" class="form-control" value="{{$book->released}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="URL_SEO..." name="url_seo" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" placeholder="IMG..." name="img" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info form-control">SAVE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>