<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/user/user/css/all.min.css">
    <link rel="stylesheet" href="/user/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/user/css/style.css">
</head>

<body class="home">
    <nav class="navbar">

        <div class="d-flex close align-items-center mx-3 ">
            <i class="fa-solid fa-arrow-left fa-lg pe-md-3 mt-1 mt-md-0" style="color: #ffffff;"></i>
            <div class="save ">
                <button class="btn btn-nav save-btn  text-white"><i class="fa-solid fa-floppy-disk fa-lg me-2 "
                        style="color: #ffffff;"></i>Save & Close</button>
            </div>
        </div>
        <div class="nav-log">
            <span class="navbar-brand font-nav text-white">
                <img src="/user/user/assets/Group 1000007853 (1).png" alt="logo">
                CreateBook
            </span>
        </div>

        <div class="generate">
            <div class=" d-flex align-items-center">
                <button class=" ps-2 align-self-center mt-md-4 ms-3">GENERATE</button>
                <i class="fa-solid fa-arrow-right fa-lg mx-md-3 mt-md-4 ms-2" style="color: #ffffff;"></i>
            </div>

        </div>
    </nav>
    <div class="container mt-4">
        <div class="container-box p-4">
            <div class="row g-2">
                <div class="col-md-3 w-100">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Tree size</option>
                            <option value="5x8">5" x 8"</option>
                            <option value="6x9">6" x 9"</option>
                            <option value="7x10">7" x 10"</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3 w-100">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Page</option>
                            <option value="type">Type...</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Format</option>
                            <option value="pdf">PDF</option>
                            <option value="pdf_print">PDF Print</option>
                            <option value="word">Word</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Bleed file</option>
                            <option value="no_bleed">No Bleed</option>
                            <option value="bleed">Bleed</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Category</option>
                            <option value="fiction">Fiction</option>
                            <option value="mystery">Mystery & Thriller</option>
                            <option value="fantasy">Fantasy</option>
                            <option value="sci-fi">Science Fiction</option>
                            <option value="romance">Romance</option>
                            <option value="biography">Biography & Memoir</option>
                            <option value="self-help">Self-Help & Personal Development</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Author Name</option>
                            <option value="type">Type...</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Chapter</option>
                            <option value="mockingbird">To Kill a Mockingbird</option>
                            <option value="pride">Pride and Prejudice</option>
                            <option value="gatsby">The Great Gatsby</option>
                            <option value="lotr">The Lord of the Rings</option>
                            <option value="harry">Harry Potter</option>
                            <option value="add_new">+ Add new</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Text Style</option>
                            <option>A</option>
                            <option>I</option>
                            <option>B</option>
                            <option>C</option>
                            <option>S</option>
                            <option>b</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Font Size</option>
                            <option>10</option>
                            <option>12</option>
                            <option>14</option>
                            <option>16</option>
                            <option>18</option>
                            <option>20</option>
                            <option>22</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="custom-select">
                        <select class="form-select">
                            <option selected disabled>Ad page num</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
            </div>

            <input type="text" class="form-control mt-3" placeholder="Book Title">
            <input type="text" class="form-control mt-2" placeholder="Book Subtitle">
            <textarea class="form-control mt-2" rows="3" placeholder="Book description"></textarea>

            <div class="text-center my-5 generate-btn">
                <button class="button_Adduser">GENERATE <i class="fa-solid fa-arrow-right fa-sm ms-2"
                        style="color: #ffffff;"></i></button>
            </div>
        </div>


    </div>
    <script src="/user/user/js/bootstrap.bundle.min.js"></script>
</body>

</html>
