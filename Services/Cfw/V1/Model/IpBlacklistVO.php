<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpBlacklistVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpBlacklistVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  IP黑名单的文件名，对应导出时的文件名
    * effectScope  IP黑名单的生效范围，1表示EIP，2表示NAT
    * importStatus  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    * importTime  IP黑名单的导入时间
    * errorMessage  导入失败的错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'effectScope' => 'int[]',
            'importStatus' => 'int',
            'importTime' => 'int',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  IP黑名单的文件名，对应导出时的文件名
    * effectScope  IP黑名单的生效范围，1表示EIP，2表示NAT
    * importStatus  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    * importTime  IP黑名单的导入时间
    * errorMessage  导入失败的错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'effectScope' => 'int32',
        'importStatus' => 'int32',
        'importTime' => 'int64',
        'errorMessage' => null
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
    * name  IP黑名单的文件名，对应导出时的文件名
    * effectScope  IP黑名单的生效范围，1表示EIP，2表示NAT
    * importStatus  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    * importTime  IP黑名单的导入时间
    * errorMessage  导入失败的错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'effectScope' => 'effect_scope',
            'importStatus' => 'import_status',
            'importTime' => 'import_time',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  IP黑名单的文件名，对应导出时的文件名
    * effectScope  IP黑名单的生效范围，1表示EIP，2表示NAT
    * importStatus  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    * importTime  IP黑名单的导入时间
    * errorMessage  导入失败的错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'effectScope' => 'setEffectScope',
            'importStatus' => 'setImportStatus',
            'importTime' => 'setImportTime',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  IP黑名单的文件名，对应导出时的文件名
    * effectScope  IP黑名单的生效范围，1表示EIP，2表示NAT
    * importStatus  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    * importTime  IP黑名单的导入时间
    * errorMessage  导入失败的错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'effectScope' => 'getEffectScope',
            'importStatus' => 'getImportStatus',
            'importTime' => 'getImportTime',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['effectScope'] = isset($data['effectScope']) ? $data['effectScope'] : null;
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['importTime'] = isset($data['importTime']) ? $data['importTime'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets name
    *  IP黑名单的文件名，对应导出时的文件名
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
    * @param string|null $name IP黑名单的文件名，对应导出时的文件名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets effectScope
    *  IP黑名单的生效范围，1表示EIP，2表示NAT
    *
    * @return int[]|null
    */
    public function getEffectScope()
    {
        return $this->container['effectScope'];
    }

    /**
    * Sets effectScope
    *
    * @param int[]|null $effectScope IP黑名单的生效范围，1表示EIP，2表示NAT
    *
    * @return $this
    */
    public function setEffectScope($effectScope)
    {
        $this->container['effectScope'] = $effectScope;
        return $this;
    }

    /**
    * Gets importStatus
    *  IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    *
    * @return int|null
    */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
    * Sets importStatus
    *
    * @param int|null $importStatus IP黑名单的导入状态，有三种状态：2：生成中、1：成功、0：失败。
    *
    * @return $this
    */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;
        return $this;
    }

    /**
    * Gets importTime
    *  IP黑名单的导入时间
    *
    * @return int|null
    */
    public function getImportTime()
    {
        return $this->container['importTime'];
    }

    /**
    * Sets importTime
    *
    * @param int|null $importTime IP黑名单的导入时间
    *
    * @return $this
    */
    public function setImportTime($importTime)
    {
        $this->container['importTime'] = $importTime;
        return $this;
    }

    /**
    * Gets errorMessage
    *  导入失败的错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 导入失败的错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

