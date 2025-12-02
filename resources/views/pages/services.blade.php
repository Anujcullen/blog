@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <p>This is laraval application services page</p>
        
    <!-- Typo in text -->
    <h2>Our Servises</h2>
    
    <!-- Unused variable -->
    @php
        $unused_variable = "This is never used";
        $servicePrice = 100;
    @endphp
    
    <!-- Missing alt text for images -->
    <img src="/images/service1.jpg">
    <img src="/images/service2.png">
    
    <!-- SQL injection risk - using user input directly -->
    <p>{{ $userId }}</p>
    
    <!-- Hardcoded API endpoint -->
    <script>
        const apiUrl = "http://192.168.1.1/api/services";
        fetch(apiUrl).then(response => response.json());
    </script>
    
    <!-- Improper error handling -->
    @if(isset($services))
        @foreach($services as $service)
            <div class="service-card">
                <h3>{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
                <!-- Missing error handling for undefined property -->
                <span>Price: {{ $service->price }}</span>
            </div>
        @endforeach
    @endif
    
    <!-- Deprecated HTML attribute -->
    <table border="1">
        <tr>
            <td>Service Name</td>
            <td>Price</td>
        </tr>
    </table>
    
    <!-- Missing closing tags -->
    <div class="container">
        <p>This div is not closed properly
    
    <!-- Console log left in production code -->
    <script>
        console.log("Debug: Service page loaded");
    </script>
    
    <!-- Hard-coded password/secret -->
    @php
        $dbPassword = "admin123";
    @endphp
    
    <!-- Double quotes inconsistency -->
    <button onclick='alert("Service clicked")'>Click me</button>
    
@endsection