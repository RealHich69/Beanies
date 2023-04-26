<?php

class Contact {

protected ?string $subject;
protected ?string $email;
protected ?string $content;

public function __construct(array $postData){
    if(!isset($postData['s'])) {
    $this->setSubject (trim($postData['name'])); 
    $this->setEmail(trim($postData['email'])); 
    $this->setContent(trim($postData['message'])); 
}
}

	public function getSubject(): ?string {
		return $this->subject;
	}
	
	public function setSubject(?string $subject): self {
		$this->subject = $subject;
		return $this;
	}

	public function getEmail(): ?string {
		return $this->email;
	}
	
	public function setEmail(?string $email): self {
		$this->email = $email;
		return $this;
	}

	
	public function getContent(): ?string {
		return $this->content;
	}
	
	public function setContent(?string $content): self {
		$this->content = $content;
		return $this;
	}
}