<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSharedRepoDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSharedRepoDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * sharedBy  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数,默认返回100条记录，最多返回1000条。
    * marker  分页查询时下一次查询的起始地址。
    * status  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'name' => 'string',
            'sharedBy' => 'string',
            'limit' => 'int',
            'marker' => 'int',
            'status' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * sharedBy  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数,默认返回100条记录，最多返回1000条。
    * marker  分页查询时下一次查询的起始地址。
    * status  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'name' => null,
        'sharedBy' => null,
        'limit' => 'int64',
        'marker' => 'int64',
        'status' => null
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
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * sharedBy  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数,默认返回100条记录，最多返回1000条。
    * marker  分页查询时下一次查询的起始地址。
    * status  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'name' => 'name',
            'sharedBy' => 'shared_by',
            'limit' => 'limit',
            'marker' => 'marker',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * sharedBy  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数,默认返回100条记录，最多返回1000条。
    * marker  分页查询时下一次查询的起始地址。
    * status  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'name' => 'setName',
            'sharedBy' => 'setSharedBy',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    * name  镜像仓库名称
    * sharedBy  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    * limit  返回条数,默认返回100条记录，最多返回1000条。
    * marker  分页查询时下一次查询的起始地址。
    * status  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'name' => 'getName',
            'sharedBy' => 'getSharedBy',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'status' => 'getStatus'
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
    const SHARED_BY_SELF = 'self';
    const SHARED_BY_THIRDPARTY = 'thirdparty';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharedByAllowableValues()
    {
        return [
            self::SHARED_BY_SELF,
            self::SHARED_BY_THIRDPARTY,
        ];
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sharedBy'] = isset($data['sharedBy']) ? $data['sharedBy'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sharedBy'] === null) {
            $invalidProperties[] = "'sharedBy' can't be null";
        }
            $allowedValues = $this->getSharedByAllowableValues();
                if (!is_null($this->container['sharedBy']) && !in_array($this->container['sharedBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharedBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets namespace
    *  组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 组织名称。小写字母开头，后面跟小写字母、数字、小数点、下划线或中划线（其中下划线最多允许连续两个，小数点、下划线、中划线不能直接相连），小写字母或数字结尾，1-64个字符。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets name
    *  镜像仓库名称
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
    * @param string|null $name 镜像仓库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sharedBy
    *  self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    *
    * @return string
    */
    public function getSharedBy()
    {
        return $this->container['sharedBy'];
    }

    /**
    * Sets sharedBy
    *
    * @param string $sharedBy self: 我共享的镜像。thirdparty: 他人共享给我的镜像
    *
    * @return $this
    */
    public function setSharedBy($sharedBy)
    {
        $this->container['sharedBy'] = $sharedBy;
        return $this;
    }

    /**
    * Gets limit
    *  返回条数,默认返回100条记录，最多返回1000条。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回条数,默认返回100条记录，最多返回1000条。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询时下一次查询的起始地址。
    *
    * @return int|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param int|null $marker 分页查询时下一次查询的起始地址。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets status
    *  查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 查询他人共享给我的镜像是否已过期 false：共享已过期。true：正常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

