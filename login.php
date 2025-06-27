<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Job Application Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .form-container {
      width: 350px;
      margin: 30px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .file-upload {
      border: 2px dashed #ccc;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      color: #666;
    }

    .file-upload input[type="file"] {
      display: none;
    }

    .file-upload label {
      display: block;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .file-upload button {
      padding: 8px 16px;
      border: none;
      background-color: #eee;
      cursor: pointer;
      border-radius: 6px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .actions button {
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .cancel-btn {
      background-color: #fff;
      border: 1px solid #ccc;
    }

    .submit-btn {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="form-group">
      <label>Your Rate</label>
      <input type="text" placeholder="Enter your rate">
    </div>

    <div class="form-group">
      <label>Rate Type</label>
      <select>
        <option>Per Hour</option>
        <option>Fixed</option>
      </select>
    </div>

    <div class="form-group">
      <label>Estimated Duration</label>
      <input type="text" placeholder="e.g. 2–3 weeks">
    </div>

    <div class="form-group">
      <label>Portfolio/Resume</label>
      <div class="file-upload">
        <label>Upload your portfolio or resume</label>
        <button onclick="document.getElementById('fileInput').click()">Choose Files</button>
        <input type="file" id="fileInput" multiple>
      </div>
    </div>

    <div class="actions">
      <button class="cancel-btn">Cancel</button>
      <button class="submit-btn">Submit Application</button>
    </div>
  </div>
</body>
</html>