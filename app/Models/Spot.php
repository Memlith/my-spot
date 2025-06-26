namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $fillable = [
        'establishment_id',
        'name',
        'description',
        'type', // Adicionado
        'latitude',
        'longitude',
        'is_available',
    ];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }
}
