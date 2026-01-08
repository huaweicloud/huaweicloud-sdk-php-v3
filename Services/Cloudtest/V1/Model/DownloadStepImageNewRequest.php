<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadStepImageNewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadStepImageNewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * parent  父级目录名称
    * sub  子级目录名称
    * fileName  文件名
    * fileType  文件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'parent' => 'string',
            'sub' => 'string',
            'fileName' => 'string',
            'fileType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * parent  父级目录名称
    * sub  子级目录名称
    * fileName  文件名
    * fileType  文件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'parent' => null,
        'sub' => null,
        'fileName' => null,
        'fileType' => null
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
    * projectId  项目id
    * parent  父级目录名称
    * sub  子级目录名称
    * fileName  文件名
    * fileType  文件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'parent' => 'parent',
            'sub' => 'sub',
            'fileName' => 'file_name',
            'fileType' => 'file_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * parent  父级目录名称
    * sub  子级目录名称
    * fileName  文件名
    * fileType  文件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'parent' => 'setParent',
            'sub' => 'setSub',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * parent  父级目录名称
    * sub  子级目录名称
    * fileName  文件名
    * fileType  文件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'parent' => 'getParent',
            'sub' => 'getSub',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType'
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
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
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
        if ($this->container['parent'] === null) {
            $invalidProperties[] = "'parent' can't be null";
        }
        if ($this->container['sub'] === null) {
            $invalidProperties[] = "'sub' can't be null";
        }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
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
    *  项目id
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
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets parent
    *  父级目录名称
    *
    * @return string
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param string $parent 父级目录名称
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
        return $this;
    }

    /**
    * Gets sub
    *  子级目录名称
    *
    * @return string
    */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
    * Sets sub
    *
    * @param string $sub 子级目录名称
    *
    * @return $this
    */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
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

