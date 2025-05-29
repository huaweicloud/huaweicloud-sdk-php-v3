<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageTemplateListResponseBodyResultImageTemplates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageTemplateListResponseBody_result_image_templates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  镜像模版ID
    * organization  swr镜像组织
    * imageName  镜像名
    * imageLabel  镜像label
    * baseImage  操作系统
    * title  镜像标题
    * description  镜像描述
    * createTime  镜像创建日期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'organization' => 'string',
            'imageName' => 'string',
            'imageLabel' => 'string',
            'baseImage' => 'string',
            'title' => 'string',
            'description' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  镜像模版ID
    * organization  swr镜像组织
    * imageName  镜像名
    * imageLabel  镜像label
    * baseImage  操作系统
    * title  镜像标题
    * description  镜像描述
    * createTime  镜像创建日期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'organization' => null,
        'imageName' => null,
        'imageLabel' => null,
        'baseImage' => null,
        'title' => null,
        'description' => null,
        'createTime' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * imageId  镜像模版ID
    * organization  swr镜像组织
    * imageName  镜像名
    * imageLabel  镜像label
    * baseImage  操作系统
    * title  镜像标题
    * description  镜像描述
    * createTime  镜像创建日期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'organization' => 'organization',
            'imageName' => 'image_name',
            'imageLabel' => 'image_label',
            'baseImage' => 'base_image',
            'title' => 'title',
            'description' => 'description',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  镜像模版ID
    * organization  swr镜像组织
    * imageName  镜像名
    * imageLabel  镜像label
    * baseImage  操作系统
    * title  镜像标题
    * description  镜像描述
    * createTime  镜像创建日期
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'organization' => 'setOrganization',
            'imageName' => 'setImageName',
            'imageLabel' => 'setImageLabel',
            'baseImage' => 'setBaseImage',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  镜像模版ID
    * organization  swr镜像组织
    * imageName  镜像名
    * imageLabel  镜像label
    * baseImage  操作系统
    * title  镜像标题
    * description  镜像描述
    * createTime  镜像创建日期
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'organization' => 'getOrganization',
            'imageName' => 'getImageName',
            'imageLabel' => 'getImageLabel',
            'baseImage' => 'getBaseImage',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageLabel'] = isset($data['imageLabel']) ? $data['imageLabel'] : null;
        $this->container['baseImage'] = isset($data['baseImage']) ? $data['baseImage'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets imageId
    *  镜像模版ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像模版ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets organization
    *  swr镜像组织
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization swr镜像组织
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageLabel
    *  镜像label
    *
    * @return string|null
    */
    public function getImageLabel()
    {
        return $this->container['imageLabel'];
    }

    /**
    * Sets imageLabel
    *
    * @param string|null $imageLabel 镜像label
    *
    * @return $this
    */
    public function setImageLabel($imageLabel)
    {
        $this->container['imageLabel'] = $imageLabel;
        return $this;
    }

    /**
    * Gets baseImage
    *  操作系统
    *
    * @return string|null
    */
    public function getBaseImage()
    {
        return $this->container['baseImage'];
    }

    /**
    * Sets baseImage
    *
    * @param string|null $baseImage 操作系统
    *
    * @return $this
    */
    public function setBaseImage($baseImage)
    {
        $this->container['baseImage'] = $baseImage;
        return $this;
    }

    /**
    * Gets title
    *  镜像标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 镜像标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  镜像描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 镜像描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  镜像创建日期
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 镜像创建日期
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

