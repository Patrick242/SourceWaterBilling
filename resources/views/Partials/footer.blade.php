<div class="container-fluid  my-4" style="background-color: rgb(89, 207, 234);" id="contact-us-container">
    <div class="row py-4">
        <div class="col-md-6 py-2">
            <p class="float-right text-light">Do you have any questions or query?</p>
        </div>
        <div class="col-md-6 py-2">
            <p><a class="btn btn-light" data-target="#modal" data-toggle="modal">Contact Us</a></p>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            @if(count($errors) > 0){
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>$error</li>
                        @endforeach
                    </ul>
                </div>
            }
            @endif
            <div class="modal-header">
                <p class="modal-title">Contact Us</p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
            <form action="{{route('create.contactus')}}" method="POST">
                    <div class="form-group">
                        <label for="name">FullName</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                     <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject-msg" id="subject">
                    </div>

                     <div class="form-group">
                        <label for="comment">Message</label>
                        <textarea class="form-control" name="comment" id="comment"></textarea>
                    </div>
            </div>

            <div class="modal-footer">
                    <input type="submit" class="form-control" name="submit-contact" value="submit" style="background-color: rgb(89, 207, 234);"/>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid bg-light">
    <div class="row py-1">
        <div class="col-md-6">
            <aside>
                <p>&copy;Copywrite <script>
                    const date = new Date();
                    const now = date.getFullYear();
                    document.write(now);
                </script> Source Water Co-operation</p>
            </aside>
        </div>

        <div class="col-md-6">
            <aside class="float-right mr-2">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
            </aside>
        </div>
    </div>
</footer>
