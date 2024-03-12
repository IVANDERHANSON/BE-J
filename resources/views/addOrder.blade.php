<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin: 200px;">
        <h1>Add Order</h1>

        <img src="{{ asset('/storage'.'/'.$shoe->Photo) }}" alt="{{ $shoe->Photo }}" style="width: 200px; height: 200px;">
        <p>Name: {{ $shoe->Name }}</p>
        <p>Price: Rp.{{ $shoe->Price }}</p>
        <p>Size: {{ $shoe->Size }}</p>
        <p>Color: {{ $shoe->Color }}</p>

        <form action="/add-order1" method="POST">
            @csrf

            <input type="number" name="ShoesId" value="{{ $shoe->id }}" style="visibility: hidden;">

            <div class="mb-3">
                <label for="">Shipment</label><br>
                @forelse ($shipments as $s)
                  <input type="radio" id="{{ $s->id }}" name="ShipmentId" value="{{ $s->id }}">
                  <label for="{{ $s->id }}">Type: {{ $s->ShipmentType }}, Estimation: {{ $s->Estimation }} days, Cost: Rp{{ $s->Cost }}, Max Quantity: {{ $s->MaxQuantity }} items.</label><br>
                @empty
                    <p>No shipment added.</p>
                @endforelse
                @error('ShipmentId')
                  <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="CustomerName" class="form-label">Customer Name</label>
              <input type="text" class="form-control" id="CustomerName" aria-describedby="emailHelp" name="CustomerName" value="{{ old('CustomerName') }}">
              @error('CustomerName')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
            </div>

            <div class="mb-3">
                <label for="Destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="Destination" aria-describedby="emailHelp" name="Destination" value="{{ old('Destination') }}">
                @error('Destination')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="Quantity" aria-describedby="emailHelp" name="Quantity" value="{{ old('Quantity') }}">
                @error('Quantity')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>