

                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">First link</a></li>
                                        <li><a href="#">Second link</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">Third link</a></li>
                                        <li><a href="#">Fourth link</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">Fifth link</a></li>
                                        <li><a href="#">Sixth link</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-3">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#">Other link</a></li>
                                        <li><a href="#">Last link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            Premium and Open Source dashboard template with responsive and high quality UI. For Free!
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-auto ml-lg-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <ul class="list-inline list-inline-dots mb-0">
                                        <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                        <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                            Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>

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
