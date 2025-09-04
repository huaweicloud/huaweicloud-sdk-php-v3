<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteCacheFileRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteCacheFileRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * filePath  删除附件路径
    * uri  附件Uri
    * parentUri  附件挂载资源Uri
    * bakUp  是否备份
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'filePath' => 'string',
            'uri' => 'string',
            'parentUri' => 'string',
            'bakUp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * filePath  删除附件路径
    * uri  附件Uri
    * parentUri  附件挂载资源Uri
    * bakUp  是否备份
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'filePath' => null,
        'uri' => null,
        'parentUri' => null,
        'bakUp' => null
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
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * filePath  删除附件路径
    * uri  附件Uri
    * parentUri  附件挂载资源Uri
    * bakUp  是否备份
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'filePath' => 'file_path',
            'uri' => 'uri',
            'parentUri' => 'parent_uri',
            'bakUp' => 'bak_up'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * filePath  删除附件路径
    * uri  附件Uri
    * parentUri  附件挂载资源Uri
    * bakUp  是否备份
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'filePath' => 'setFilePath',
            'uri' => 'setUri',
            'parentUri' => 'setParentUri',
            'bakUp' => 'setBakUp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * filePath  删除附件路径
    * uri  附件Uri
    * parentUri  附件挂载资源Uri
    * bakUp  是否备份
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'filePath' => 'getFilePath',
            'uri' => 'getUri',
            'parentUri' => 'getParentUri',
            'bakUp' => 'getBakUp'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['bakUp'] = isset($data['bakUp']) ? $data['bakUp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
    * Gets projectId
    *  项目ID，固定长度32位字符（字母和数字）。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，固定长度32位字符（字母和数字）。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets filePath
    *  删除附件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 删除附件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets uri
    *  附件Uri
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 附件Uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets parentUri
    *  附件挂载资源Uri
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 附件挂载资源Uri
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets bakUp
    *  是否备份
    *
    * @return bool|null
    */
    public function getBakUp()
    {
        return $this->container['bakUp'];
    }

    /**
    * Sets bakUp
    *
    * @param bool|null $bakUp 是否备份
    *
    * @return $this
    */
    public function setBakUp($bakUp)
    {
        $this->container['bakUp'] = $bakUp;
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

