<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DBCheckDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DBCheckDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * documentationLink  检查说明链接
    * description  检查项描述
    * id  检查项id
    * title  检查项标题
    * status  检查状态
    * detectedProblems  各项检查项检测到的问题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'documentationLink' => 'string',
            'description' => 'string',
            'id' => 'string',
            'title' => 'string',
            'status' => 'string',
            'detectedProblems' => '\HuaweiCloud\SDK\Rds\V3\Model\DetectedProblem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * documentationLink  检查说明链接
    * description  检查项描述
    * id  检查项id
    * title  检查项标题
    * status  检查状态
    * detectedProblems  各项检查项检测到的问题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'documentationLink' => null,
        'description' => null,
        'id' => null,
        'title' => null,
        'status' => null,
        'detectedProblems' => null
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
    * documentationLink  检查说明链接
    * description  检查项描述
    * id  检查项id
    * title  检查项标题
    * status  检查状态
    * detectedProblems  各项检查项检测到的问题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'documentationLink' => 'documentation_link',
            'description' => 'description',
            'id' => 'id',
            'title' => 'title',
            'status' => 'status',
            'detectedProblems' => 'detected_problems'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * documentationLink  检查说明链接
    * description  检查项描述
    * id  检查项id
    * title  检查项标题
    * status  检查状态
    * detectedProblems  各项检查项检测到的问题
    *
    * @var string[]
    */
    protected static $setters = [
            'documentationLink' => 'setDocumentationLink',
            'description' => 'setDescription',
            'id' => 'setId',
            'title' => 'setTitle',
            'status' => 'setStatus',
            'detectedProblems' => 'setDetectedProblems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * documentationLink  检查说明链接
    * description  检查项描述
    * id  检查项id
    * title  检查项标题
    * status  检查状态
    * detectedProblems  各项检查项检测到的问题
    *
    * @var string[]
    */
    protected static $getters = [
            'documentationLink' => 'getDocumentationLink',
            'description' => 'getDescription',
            'id' => 'getId',
            'title' => 'getTitle',
            'status' => 'getStatus',
            'detectedProblems' => 'getDetectedProblems'
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
        $this->container['documentationLink'] = isset($data['documentationLink']) ? $data['documentationLink'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['detectedProblems'] = isset($data['detectedProblems']) ? $data['detectedProblems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['documentationLink']) && (mb_strlen($this->container['documentationLink']) > 1024)) {
                $invalidProperties[] = "invalid value for 'documentationLink', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['documentationLink']) && (mb_strlen($this->container['documentationLink']) < 1)) {
                $invalidProperties[] = "invalid value for 'documentationLink', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
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
    * Gets documentationLink
    *  检查说明链接
    *
    * @return string|null
    */
    public function getDocumentationLink()
    {
        return $this->container['documentationLink'];
    }

    /**
    * Sets documentationLink
    *
    * @param string|null $documentationLink 检查说明链接
    *
    * @return $this
    */
    public function setDocumentationLink($documentationLink)
    {
        $this->container['documentationLink'] = $documentationLink;
        return $this;
    }

    /**
    * Gets description
    *  检查项描述
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
    * @param string|null $description 检查项描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  检查项id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 检查项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  检查项标题
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
    * @param string|null $title 检查项标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets status
    *  检查状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 检查状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detectedProblems
    *  各项检查项检测到的问题
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DetectedProblem[]|null
    */
    public function getDetectedProblems()
    {
        return $this->container['detectedProblems'];
    }

    /**
    * Sets detectedProblems
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DetectedProblem[]|null $detectedProblems 各项检查项检测到的问题
    *
    * @return $this
    */
    public function setDetectedProblems($detectedProblems)
    {
        $this->container['detectedProblems'] = $detectedProblems;
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

