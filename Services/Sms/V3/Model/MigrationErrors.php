<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationErrors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationErrors';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorJson  保存错误信息的json字符串
    * hostName  主机名称（从用户系统获取，可能为空）
    * name  源端在主机迁移服务中的名称
    * sourceId  源端服务器ID
    * sourceIp  源端服务器的ip
    * targetIp  目的端服务器的ip
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorJson' => 'string',
            'hostName' => 'string',
            'name' => 'string',
            'sourceId' => 'string',
            'sourceIp' => 'string',
            'targetIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorJson  保存错误信息的json字符串
    * hostName  主机名称（从用户系统获取，可能为空）
    * name  源端在主机迁移服务中的名称
    * sourceId  源端服务器ID
    * sourceIp  源端服务器的ip
    * targetIp  目的端服务器的ip
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorJson' => null,
        'hostName' => null,
        'name' => null,
        'sourceId' => null,
        'sourceIp' => null,
        'targetIp' => null
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
    * errorJson  保存错误信息的json字符串
    * hostName  主机名称（从用户系统获取，可能为空）
    * name  源端在主机迁移服务中的名称
    * sourceId  源端服务器ID
    * sourceIp  源端服务器的ip
    * targetIp  目的端服务器的ip
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorJson' => 'error_json',
            'hostName' => 'host_name',
            'name' => 'name',
            'sourceId' => 'source_id',
            'sourceIp' => 'source_ip',
            'targetIp' => 'target_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorJson  保存错误信息的json字符串
    * hostName  主机名称（从用户系统获取，可能为空）
    * name  源端在主机迁移服务中的名称
    * sourceId  源端服务器ID
    * sourceIp  源端服务器的ip
    * targetIp  目的端服务器的ip
    *
    * @var string[]
    */
    protected static $setters = [
            'errorJson' => 'setErrorJson',
            'hostName' => 'setHostName',
            'name' => 'setName',
            'sourceId' => 'setSourceId',
            'sourceIp' => 'setSourceIp',
            'targetIp' => 'setTargetIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorJson  保存错误信息的json字符串
    * hostName  主机名称（从用户系统获取，可能为空）
    * name  源端在主机迁移服务中的名称
    * sourceId  源端服务器ID
    * sourceIp  源端服务器的ip
    * targetIp  目的端服务器的ip
    *
    * @var string[]
    */
    protected static $getters = [
            'errorJson' => 'getErrorJson',
            'hostName' => 'getHostName',
            'name' => 'getName',
            'sourceId' => 'getSourceId',
            'sourceIp' => 'getSourceIp',
            'targetIp' => 'getTargetIp'
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
        $this->container['errorJson'] = isset($data['errorJson']) ? $data['errorJson'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['targetIp'] = isset($data['targetIp']) ? $data['targetIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['errorJson']) && (mb_strlen($this->container['errorJson']) > 255)) {
                $invalidProperties[] = "invalid value for 'errorJson', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['errorJson']) && (mb_strlen($this->container['errorJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorJson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 255)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetIp']) && (mb_strlen($this->container['targetIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetIp']) && (mb_strlen($this->container['targetIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetIp', the character length must be bigger than or equal to 0.";
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
    * Gets errorJson
    *  保存错误信息的json字符串
    *
    * @return string|null
    */
    public function getErrorJson()
    {
        return $this->container['errorJson'];
    }

    /**
    * Sets errorJson
    *
    * @param string|null $errorJson 保存错误信息的json字符串
    *
    * @return $this
    */
    public function setErrorJson($errorJson)
    {
        $this->container['errorJson'] = $errorJson;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称（从用户系统获取，可能为空）
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称（从用户系统获取，可能为空）
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets name
    *  源端在主机迁移服务中的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 源端在主机迁移服务中的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceId
    *  源端服务器ID
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 源端服务器ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceIp
    *  源端服务器的ip
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 源端服务器的ip
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets targetIp
    *  目的端服务器的ip
    *
    * @return string|null
    */
    public function getTargetIp()
    {
        return $this->container['targetIp'];
    }

    /**
    * Sets targetIp
    *
    * @param string|null $targetIp 目的端服务器的ip
    *
    * @return $this
    */
    public function setTargetIp($targetIp)
    {
        $this->container['targetIp'] = $targetIp;
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

