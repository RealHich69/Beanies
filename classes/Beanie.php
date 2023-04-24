<?php
class Beanie
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $description;
    protected float $price = 0.0;
    protected ?string $image;
	public function getId(): ?int {
		return $this->id;
	}
	
	public function setId(?int $id): self {
		$this->id = $id;
		return $this;
	}
	public function getName(): ?string {
		return $this->name;
	}
	public function setName(?string $name): self {
		$this->name = $name;
		return $this;
	}
	public function getDescription(): ?string {
		return $this->description;
	}
	
	public function setDescription(?string $description): self {
		$this->description = $description;
		return $this;
	}
	public function getPrice(): float {
		return $this->price;
	}
	
	public function setPrice(float $price): self {
		$this->price = $price;
		return $this;
	}
    public function getImage(): ?string {
		return $this->image;
	}
	public function setImage(?string $image): self {
		$this->image = $image;
		return $this;
	}
	
		const SIZE_S = 'S';
		const SIZE_M = 'M';
		const SIZE_L = 'L';
		const SIZE_XL = 'XL';
	
		
		const MATERIAL_LAINE = 'laine';
		const MATERIAL_SOIE = 'soie';
		const MATERIAL_COTON = 'coton';
		const MATERIAL_CACHEMIRE = 'cachemire';

		const MIN_PRICE = 0;
    	const MAX_PRICE = 100;
		protected $data = [
			// Ajoutez ici les données de vos bonnets avec les tailles, les matières et les prix
			// par exemple:
			[
				'name' => 'Bonnet en laine',
				'size' => [self::SIZE_S, self::SIZE_M],
				'material' => [self::MATERIAL_LAINE],
				'price' => 10
			],
			[
				'name' => 'Bonnet en soie',
				'size' => [self::SIZE_M, self::SIZE_L],
				'material' => [self::MATERIAL_SOIE],
				'price' => 14
			],
			[
				'name' => 'Bonnet en soie et cachemire M',
				'size' => [self::SIZE_M, self::SIZE_L],
				'material' => [self::MATERIAL_SOIE, self::MATERIAL_CACHEMIRE],
				'price' => 20
			],
			[
				'name' => 'Bonnet en laine et soie M',
				'size' => [self::SIZE_M, self::SIZE_L],
				'material' => [self::MATERIAL_LAINE, self::MATERIAL_CACHEMIRE],
				'price' => 12
			],
			
			
			
		];
}


