namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerrainImage extends Model {
    use HasFactory;

    public $timestamps = false; // since you use uploaded_at timestamp instead of default

    protected $fillable = [
        'terrain_id',
        'image_path',
        'uploaded_at',
    ];

    protected $dates = ['uploaded_at'];

    public function terrain()
    {
        return $this->belongsTo(Terrain::class);
    }
}
