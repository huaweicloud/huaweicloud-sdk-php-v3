<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本ID
    * versionNum  版本号
    * versionDesc  版本描述
    * status  状态
    * packageName  插件所属包
    * componentAttachmentId  插件的附件id
    * subVersionId  订阅版本id
    * connectionConfig  操作连接配置List
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'versionNum' => 'string',
            'versionDesc' => 'string',
            'status' => 'string',
            'packageName' => 'string',
            'componentAttachmentId' => 'string',
            'subVersionId' => 'string',
            'connectionConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本ID
    * versionNum  版本号
    * versionDesc  版本描述
    * status  状态
    * packageName  插件所属包
    * componentAttachmentId  插件的附件id
    * subVersionId  订阅版本id
    * connectionConfig  操作连接配置List
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'versionNum' => null,
        'versionDesc' => null,
        'status' => null,
        'packageName' => null,
        'componentAttachmentId' => null,
        'subVersionId' => null,
        'connectionConfig' => null
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
    * id  版本ID
    * versionNum  版本号
    * versionDesc  版本描述
    * status  状态
    * packageName  插件所属包
    * componentAttachmentId  插件的附件id
    * subVersionId  订阅版本id
    * connectionConfig  操作连接配置List
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'versionNum' => 'version_num',
            'versionDesc' => 'version_desc',
            'status' => 'status',
            'packageName' => 'package_name',
            'componentAttachmentId' => 'component_attachment_id',
            'subVersionId' => 'sub_version_id',
            'connectionConfig' => 'connection_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本ID
    * versionNum  版本号
    * versionDesc  版本描述
    * status  状态
    * packageName  插件所属包
    * componentAttachmentId  插件的附件id
    * subVersionId  订阅版本id
    * connectionConfig  操作连接配置List
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'versionNum' => 'setVersionNum',
            'versionDesc' => 'setVersionDesc',
            'status' => 'setStatus',
            'packageName' => 'setPackageName',
            'componentAttachmentId' => 'setComponentAttachmentId',
            'subVersionId' => 'setSubVersionId',
            'connectionConfig' => 'setConnectionConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本ID
    * versionNum  版本号
    * versionDesc  版本描述
    * status  状态
    * packageName  插件所属包
    * componentAttachmentId  插件的附件id
    * subVersionId  订阅版本id
    * connectionConfig  操作连接配置List
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'versionNum' => 'getVersionNum',
            'versionDesc' => 'getVersionDesc',
            'status' => 'getStatus',
            'packageName' => 'getPackageName',
            'componentAttachmentId' => 'getComponentAttachmentId',
            'subVersionId' => 'getSubVersionId',
            'connectionConfig' => 'getConnectionConfig'
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
        $this->container['versionNum'] = isset($data['versionNum']) ? $data['versionNum'] : null;
        $this->container['versionDesc'] = isset($data['versionDesc']) ? $data['versionDesc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['componentAttachmentId'] = isset($data['componentAttachmentId']) ? $data['componentAttachmentId'] : null;
        $this->container['subVersionId'] = isset($data['subVersionId']) ? $data['subVersionId'] : null;
        $this->container['connectionConfig'] = isset($data['connectionConfig']) ? $data['connectionConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['versionNum']) && (mb_strlen($this->container['versionNum']) > 20)) {
                $invalidProperties[] = "invalid value for 'versionNum', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['versionNum']) && (mb_strlen($this->container['versionNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['versionDesc']) && (mb_strlen($this->container['versionDesc']) > 1024)) {
                $invalidProperties[] = "invalid value for 'versionDesc', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['versionDesc']) && (mb_strlen($this->container['versionDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 20)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['packageName']) && (mb_strlen($this->container['packageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['packageName']) && (mb_strlen($this->container['packageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentAttachmentId']) && (mb_strlen($this->container['componentAttachmentId']) > 256)) {
                $invalidProperties[] = "invalid value for 'componentAttachmentId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['componentAttachmentId']) && (mb_strlen($this->container['componentAttachmentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentAttachmentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subVersionId']) && (mb_strlen($this->container['subVersionId']) > 256)) {
                $invalidProperties[] = "invalid value for 'subVersionId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['subVersionId']) && (mb_strlen($this->container['subVersionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subVersionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connectionConfig']) && (mb_strlen($this->container['connectionConfig']) > 10240)) {
                $invalidProperties[] = "invalid value for 'connectionConfig', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['connectionConfig']) && (mb_strlen($this->container['connectionConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectionConfig', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  版本ID
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
    * @param string|null $id 版本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets versionNum
    *  版本号
    *
    * @return string|null
    */
    public function getVersionNum()
    {
        return $this->container['versionNum'];
    }

    /**
    * Sets versionNum
    *
    * @param string|null $versionNum 版本号
    *
    * @return $this
    */
    public function setVersionNum($versionNum)
    {
        $this->container['versionNum'] = $versionNum;
        return $this;
    }

    /**
    * Gets versionDesc
    *  版本描述
    *
    * @return string|null
    */
    public function getVersionDesc()
    {
        return $this->container['versionDesc'];
    }

    /**
    * Sets versionDesc
    *
    * @param string|null $versionDesc 版本描述
    *
    * @return $this
    */
    public function setVersionDesc($versionDesc)
    {
        $this->container['versionDesc'] = $versionDesc;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets packageName
    *  插件所属包
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName 插件所属包
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets componentAttachmentId
    *  插件的附件id
    *
    * @return string|null
    */
    public function getComponentAttachmentId()
    {
        return $this->container['componentAttachmentId'];
    }

    /**
    * Sets componentAttachmentId
    *
    * @param string|null $componentAttachmentId 插件的附件id
    *
    * @return $this
    */
    public function setComponentAttachmentId($componentAttachmentId)
    {
        $this->container['componentAttachmentId'] = $componentAttachmentId;
        return $this;
    }

    /**
    * Gets subVersionId
    *  订阅版本id
    *
    * @return string|null
    */
    public function getSubVersionId()
    {
        return $this->container['subVersionId'];
    }

    /**
    * Sets subVersionId
    *
    * @param string|null $subVersionId 订阅版本id
    *
    * @return $this
    */
    public function setSubVersionId($subVersionId)
    {
        $this->container['subVersionId'] = $subVersionId;
        return $this;
    }

    /**
    * Gets connectionConfig
    *  操作连接配置List
    *
    * @return string|null
    */
    public function getConnectionConfig()
    {
        return $this->container['connectionConfig'];
    }

    /**
    * Sets connectionConfig
    *
    * @param string|null $connectionConfig 操作连接配置List
    *
    * @return $this
    */
    public function setConnectionConfig($connectionConfig)
    {
        $this->container['connectionConfig'] = $connectionConfig;
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

