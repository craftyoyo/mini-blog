

                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-auto ml-lg-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <ul class="list-inline list-inline-dots mb-0">
                                        <li class="list-inline-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <a href="<?php echo base_url('~' . $this->session->userdata('username')) ?>" class="btn btn-sm btn-outline-primary" target="_blank">View My Blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                            <a href="<?php echo base_url() ?>">churro</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script>
            if($('#wsywig').length)
            {
                var quill = new Quill('#wsywig', {
                    modules: {
                        toolbar: [
                            [{ header: [1, 2, false] }],
                            ['bold', 'italic', 'underline'],
                            ['image', 'code-block']
                        ]
                    },
                    theme: 'snow'
                });
                if($('#wsywig-contents').val().length) {
                    quill.container.firstChild.innerHTML = $('#wsywig-contents').val()
                }

                var form = document.querySelector('form');

                form.onsubmit = function() {
                    console.log('ya');
                    if(quill.getContents().length() > 1) {
                        var about = document.querySelector('#wsywig + input[type=hidden]');
                        about.value = quill.container.firstChild.innerHTML
                        console.log("Submitted", $(form).serialize(), $(form).serializeArray());
                    }
                };
            }
        </script>
    </body>
</html>
