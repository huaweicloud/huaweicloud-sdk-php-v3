<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Material implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Material';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  素材ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * materialName  素材名称。
    * materialResolution  素材分辨率。
    * materialSizeStr  素材大小（含单位）。
    * filePath  素材云盘存储文件下载地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'lastUpdatedBy' => 'string',
            'updateTime' => 'int',
            'materialName' => 'string',
            'materialResolution' => 'string',
            'materialSizeStr' => 'string',
            'filePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  素材ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * materialName  素材名称。
    * materialResolution  素材分辨率。
    * materialSizeStr  素材大小（含单位）。
    * filePath  素材云盘存储文件下载地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'lastUpdatedBy' => null,
        'updateTime' => 'int64',
        'materialName' => null,
        'materialResolution' => null,
        'materialSizeStr' => null,
        'filePath' => null
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
    * id  素材ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * materialName  素材名称。
    * materialResolution  素材分辨率。
    * materialSizeStr  素材大小（含单位）。
    * filePath  素材云盘存储文件下载地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'lastUpdatedBy' => 'lastUpdatedBy',
            'updateTime' => 'updateTime',
            'materialName' => 'materialName',
            'materialResolution' => 'materialResolution',
            'materialSizeStr' => 'materialSizeStr',
            'filePath' => 'filePath'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  素材ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * materialName  素材名称。
    * materialResolution  素材分辨率。
    * materialSizeStr  素材大小（含单位）。
    * filePath  素材云盘存储文件下载地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'lastUpdatedBy' => 'setLastUpdatedBy',
            'updateTime' => 'setUpdateTime',
            'materialName' => 'setMaterialName',
            'materialResolution' => 'setMaterialResolution',
            'materialSizeStr' => 'setMaterialSizeStr',
            'filePath' => 'setFilePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  素材ID。
    * lastUpdatedBy  更新者。
    * updateTime  更新时间。
    * materialName  素材名称。
    * materialResolution  素材分辨率。
    * materialSizeStr  素材大小（含单位）。
    * filePath  素材云盘存储文件下载地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'lastUpdatedBy' => 'getLastUpdatedBy',
            'updateTime' => 'getUpdateTime',
            'materialName' => 'getMaterialName',
            'materialResolution' => 'getMaterialResolution',
            'materialSizeStr' => 'getMaterialSizeStr',
            'filePath' => 'getFilePath'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['materialName'] = isset($data['materialName']) ? $data['materialName'] : null;
        $this->container['materialResolution'] = isset($data['materialResolution']) ? $data['materialResolution'] : null;
        $this->container['materialSizeStr'] = isset($data['materialSizeStr']) ? $data['materialSizeStr'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
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
    * Gets id
    *  素材ID。
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
    * @param string|null $id 素材ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastUpdatedBy
    *  更新者。
    *
    * @return string|null
    */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
    * Sets lastUpdatedBy
    *
    * @param string|null $lastUpdatedBy 更新者。
    *
    * @return $this
    */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets materialName
    *  素材名称。
    *
    * @return string|null
    */
    public function getMaterialName()
    {
        return $this->container['materialName'];
    }

    /**
    * Sets materialName
    *
    * @param string|null $materialName 素材名称。
    *
    * @return $this
    */
    public function setMaterialName($materialName)
    {
        $this->container['materialName'] = $materialName;
        return $this;
    }

    /**
    * Gets materialResolution
    *  素材分辨率。
    *
    * @return string|null
    */
    public function getMaterialResolution()
    {
        return $this->container['materialResolution'];
    }

    /**
    * Sets materialResolution
    *
    * @param string|null $materialResolution 素材分辨率。
    *
    * @return $this
    */
    public function setMaterialResolution($materialResolution)
    {
        $this->container['materialResolution'] = $materialResolution;
        return $this;
    }

    /**
    * Gets materialSizeStr
    *  素材大小（含单位）。
    *
    * @return string|null
    */
    public function getMaterialSizeStr()
    {
        return $this->container['materialSizeStr'];
    }

    /**
    * Sets materialSizeStr
    *
    * @param string|null $materialSizeStr 素材大小（含单位）。
    *
    * @return $this
    */
    public function setMaterialSizeStr($materialSizeStr)
    {
        $this->container['materialSizeStr'] = $materialSizeStr;
        return $this;
    }

    /**
    * Gets filePath
    *  素材云盘存储文件下载地址。
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
    * @param string|null $filePath 素材云盘存储文件下载地址。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
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

