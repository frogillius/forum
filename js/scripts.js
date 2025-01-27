document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.getElementById('signup-form');
    const loginForm = document.getElementById('login-form');
    const postForm = document.getElementById('post-form');
    const uploadForm = document.getElementById('upload-form');

    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            // Basic validation for signup form
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (!username || !password) {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            // Basic validation for login form
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (!username || !password) {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }

    if (postForm) {
        postForm.addEventListener('submit', function(event) {
            // Basic validation for post form
            const title = document.getElementById('title').value;
            const content = document.getElementById('content').value;
            if (!title || !content) {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }

    if (uploadForm) {
        uploadForm.addEventListener('submit', function(event) {
            // Basic validation for upload form
            const fileInput = document.getElementById('file-input');
            if (!fileInput.files.length) {
                event.preventDefault();
                alert('Please select an image to upload.');
            }
        });
    }
});