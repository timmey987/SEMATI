<?php
/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\MediaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 * @ORM\Entity
 */
class Gallery extends BaseGallery {

	/**
	 * @var integer $id
	 */
	protected $id;

	/**
	 * @var string $description
	 */
	protected $description;
	
	/**
	 * 
	 * @var Media $media
	 */
	protected $previewImage;
	
	/**
	 * 
	 * @var boolean $internal
	 */
	protected $internal;
	
	/**
	 * 
	 * @var string $urlSlug
	 */
	protected $urlSlug;
	
	
	public function __construct() {
		$this->internal = false;
		$this->enabled = true;
	}
	
	
	/**
	 * Get id
	 *
	 * @return integer $id
	 */
	public function getId() {
		return $this->id;
	}
		
	public function getAllMedia() {
		$images = array();
		foreach ($this->getGalleryHasMedias() as $medRef) {
			$images[] = $medRef->getMedia();
		}
		return $images;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function getPreviewImage() {
		return $this->previewImage;
	}
	
	public function setPreviewImage($previewImage) {
		$this->previewImage= $previewImage;
	}
	
	public function getUrlSlug() {
		return $this->urlSlug;
	}
	
	public function setUrlSlug($urlSlug) {
		$this->urlSlug = $urlSlug;
	}
	
	public function isInternal() {
		return $this->internal;
	}
	
	public function setInternal($internal) {
		$this->internal = $internal;
	}
	
}
