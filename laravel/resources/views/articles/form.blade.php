@csrf
<div class="md-form">
  <input type="text" id="title" class="form-control" name="title" required value="{{ old('title') }}">
  <label for="title">タイトル</label>
</div>

<div class="md-form">
  <textarea id="body" class="md-textarea form-control" rows="5" name="body" required></textarea>
  <label for="body">本文</label>
</div>