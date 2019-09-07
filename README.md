# Symfony-4-czech-date-format-DataTransformer

###### Nastavení:
Vytvořte adresář v src/Form/DataTransformer a zkopírujte obsah gitu do tohoto adresáře.
    ve formType je nutné nastavit polím s datumem ** use Symfony\Component\Form\Extension\Core\Type\TextType; ** .
 Data transfomer získáme 
 
   ```
use App\Form\DataTransformer\CzDateTransformer;

class MyFormType extends AbstractType
{
    
    private $transformer;
    
    public function __construct(CzDateTransformer $transformer) {
       $this->transformer = $transformer; 
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    ->add('myDate',TextType::class);
    }
   ```
   
   ###### Našemu poli s datumem nastavíme transformer:
   
   ```
   $builder->get('myDate')
   ->addModelTransformer($this->transformer);
   ```
</p>
