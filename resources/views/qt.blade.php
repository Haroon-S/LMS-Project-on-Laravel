<form action="/enroll-course/{{$course->id}}" method="get" enctype="multipart/form-data">
          @csrf
          <button type="submit">Enroll</button>
        </form>