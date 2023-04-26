<?php

class Contact {

protected ?string $subject;
protected ?string $email;
protected ?string $content;


	/**
	 * @return string|null
	 */
	public function getSubject(): ?string {
		return $this->subject;
	}
	
	/**
	 * @param string|null $subject 
	 * @return self
	 */
	public function setSubject(?string $subject): self {
		$this->subject = $subject;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getEmail(): ?string {
		return $this->email;
	}
	
	/**
	 * @param string|null $email 
	 * @return self
	 */
	public function setEmail(?string $email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getContent(): ?string {
		return $this->content;
	}
	
	/**
	 * @param string|null $content 
	 * @return self
	 */
	public function setContent(?string $content): self {
		$this->content = $content;
		return $this;
	}
}