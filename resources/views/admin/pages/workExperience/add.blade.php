<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Work Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 40px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #434E5E;
            margin-bottom: 20px;
        }

        .btn-add,
        .btn-remove {
            font-size: 14px;
            padding: 3px 8px;
        }

        label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Work Experience</h2>
        <form action="{{ route('experience.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="role" class="form-label">Role / Job Title</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="e.g. Laravel Developer" required>
            </div>

            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="e.g. TechNova Solutions" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="text" class="form-control" id="start_date" name="start_date" placeholder="e.g. Jan 2023" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="e.g. Present">
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Short Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Describe your overall role and contributions"></textarea>
            </div>

            <!-- Responsibilities -->
            <div class="mb-3">
                <label class="form-label">Key Responsibilities</label>
                <div id="responsibilities-container">
                    <div class="input-group mb-2">
                        <input type="text" name="responsibilities[]" class="form-control" placeholder="Enter a responsibility">
                        <button type="button" class="btn btn-outline-secondary btn-add">+</button>
                    </div>
                </div>
            </div>

            <!-- Technologies -->
            <div class="mb-3">
                <label class="form-label">Technologies Used</label>
                <div id="tech-container">
                    <div class="input-group mb-2">
                        <input type="text" name="technologies_used[]" class="form-control" placeholder="e.g. Laravel">
                        <button type="button" class="btn btn-outline-secondary btn-add">+</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Experience</button>
        </form>
    </div>

    <script>
        // Add/Remove dynamic inputs for responsibilities & technologies
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('btn-add')) {
                const group = e.target.closest('.input-group').cloneNode(true);
                group.querySelector('input').value = '';
                group.querySelector('.btn-add').outerHTML = '<button type="button" class="btn btn-danger btn-remove">−</button>';
                e.target.closest('#responsibilities-container, #tech-container').appendChild(group);
            }

            if (e.target.classList.contains('btn-remove')) {
                e.target.closest('.input-group').remove();
            }
        });
    </script>
</body>
</html>
