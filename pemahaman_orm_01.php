<?php
    use Illuminate\Support\Facades\DB;
    use App\Models\School;

    $start_date = '2020-01-01';
    $end_date = '2020-01-30';
    //query Builder
    $query = DB::table('school')->whereBetween('inaugurated_date', [$start_date, $end_date])->get();
    // Eloquent
    // Sudah ada model school terlebih dahulu
    $query = School::whereBetween('inaugurated_date', [$start_date, $end_date])->get();

?>