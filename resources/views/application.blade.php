<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Application</title>
</head>
<body>
    <div class="container-fluid bg-light">
        <h1 class="text-center">Recruitment Form</h1>
        <div class="d-flex justify-content-center align-items-center h-100 mb-4">
            <form action="/create" class="card w-100 p-3" style="max-width: 500px;" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                  @if($errors->has('name'))
                     <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" aria-describedby="emailHelp" id="email" name="email" value="{{old('email')}}" required>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  @if($errors->has('email'))
                     <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="phoneNumber" class="form-label">Phone Number<span class="text-danger">*</span></label>
                  <input type="tel" id="phoneNumber" name="phone_number" class="form-control" maxlength="32" value="{{old('phone_number')}}" required>
                  @if($errors->has('phone_number'))
                     <div class="text-danger">{{ $errors->first('phone_number') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="intro" class="form-label">Introduction<span class="text-danger">*</span></label>
                  <textarea name="intro" id="intro" cols="30" rows="5" class="form-control" maxlength="100" required>{{old('intro')}}</textarea>
                  @if($errors->has('intro'))
                     <div class="text-danger">{{ $errors->first('intro') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="age" class="form-label">Age<span class="text-danger">*</span></label>
                  <input type="number" id="age" name="age" class="form-control" step="0.5" value="{{old('age')}}" required>
                  @if($errors->has('age'))
                     <div class="text-danger">{{ $errors->first('age') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="city" class="form-label">City<span class="text-danger">*</span></label>
                  <select name="city" id="city" class="form-select" value="{{old('city')}}"  required>
                    <option value="" selected>Select a city</option>
                    <option value="Baghdad">Baghdad</option>
                    <option value="Basrah">Basrah</option>
                    <option value="Erbil">Erbil</option>
                    <option value="Sulaymaniyah">Sulaymaniyah</option>
                    <option value="Dohuk">Dahuk</option>
                    <option value="Ninawa">Ninawa</option>
                    <option value="erbil">Karkuk</option>
                    <option value="Anbar">Anbar</option>
                    <option value="Najaf">Najaf</option>
                    <option value="Karbala'">Karbala'</option>
                    <option value="Babil">Babil</option>
                    <option value="Maysan">Maysan</option>
                    <option value="Diyala">Diyala</option>
                    <option value="Dhi Qar">Dhi Qar</option>
                    <option value="Wasit">Wasit</option>
                    <option value="Al-Qadisiyah">Al-Qadisiyah</option>
                    <option value="Al-Muthanna">Al-Muthanna</option>
                    <option value="Salah Addin">Salah Addin</option>
                  </select>  
                  @if($errors->has('city'))
                     <div class="text-danger">{{ $errors->first('city') }}</div>
                    @endif 
                </div>
                
                <div class="mb-3">
                  <label for="fieldOfStudy" class="form-label">Field Of Study<span class="text-danger">*</span></label>
                  <input type="text" id="fieldOfStudy" name="field_of_study" class="form-control" value="{{old('field_of_study')}}" required>
                  @if($errors->has('field_of_study'))
                     <div class="text-danger">{{ $errors->first('field_of_study') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="degree" class="form-label">Degree<span class="text-danger">*</span></label>
                  <select name="degree" id="degree" class="form-select" value="{{old('degree')}}" required>
                    <option value="" selected>Select a degree</option>
                    <option value="Phd">Phd</option>
                    <option value="Master">Master</option>
                    <option value="Bechelor's">Bechelor's</option>
                    <option value="High School">High School</option>
                  </select>
                  @if($errors->has('degree'))
                     <div class="text-danger">{{ $errors->first('degree') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="yearsOfExperience" class="form-label">Years Of Experience<span class="text-danger">*</span></label>
                  <input type="number" id="yearsOfExperience" name="years_of_experience" class="form-control" step="0.5" value="{{old('years_of_experience')}}" required>
                  @if($errors->has('years_of_experience'))
                     <div class="text-danger">{{ $errors->first('years_of_experience') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Image of you<span class="text-danger">*</span></label>
                  <input type="file" id="image" name="image" class="form-control" accept="image/*" value="{{old('image')}}" required>
                  @if($errors->has('image'))
                     <div class="text-danger">{{ $errors->first('image') }}</div>
                    @endif 
                </div>

                <div class="mb-3">
                    <label for="resume" class="form-label">Resume<span class="text-danger">*</span></label>
                    <input type="file" id="resume" name="resume" class="form-control" accept="application/pdf" value="{{old('resume')}}" required>
                    @if($errors->has('resume'))
                     <div class="text-danger">{{ $errors->first('resume') }}</div>
                    @endif    
                  </div>

                <div class="mb-3">
                  <button type="submit" class="btn btn-primary w-100" style="max-width:100px">Submit</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>