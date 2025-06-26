<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * namespaceName  命名空间名称
    * repositoryName  仓库名称
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * isAccessory  是否返回制品附件，默认为true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'namespaceName' => 'string',
            'repositoryName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'isAccessory' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * namespaceName  命名空间名称
    * repositoryName  仓库名称
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * isAccessory  是否返回制品附件，默认为true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'namespaceName' => null,
        'repositoryName' => null,
        'offset' => null,
        'limit' => null,
        'isAccessory' => null
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
    * instanceId  企业仓库实例ID
    * namespaceName  命名空间名称
    * repositoryName  仓库名称
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * isAccessory  是否返回制品附件，默认为true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'namespaceName' => 'namespace_name',
            'repositoryName' => 'repository_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'isAccessory' => 'is_accessory'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  企业仓库实例ID
    * namespaceName  命名空间名称
    * repositoryName  仓库名称
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * isAccessory  是否返回制品附件，默认为true
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'namespaceName' => 'setNamespaceName',
            'repositoryName' => 'setRepositoryName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'isAccessory' => 'setIsAccessory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  企业仓库实例ID
    * namespaceName  命名空间名称
    * repositoryName  仓库名称
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * limit  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    * isAccessory  是否返回制品附件，默认为true
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'namespaceName' => 'getNamespaceName',
            'repositoryName' => 'getRepositoryName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'isAccessory' => 'getIsAccessory'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['isAccessory'] = isset($data['isAccessory']) ? $data['isAccessory'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['namespaceName'] === null) {
            $invalidProperties[] = "'namespaceName' can't be null";
        }
        if ($this->container['repositoryName'] === null) {
            $invalidProperties[] = "'repositoryName' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets instanceId
    *  企业仓库实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 企业仓库实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets repositoryName
    *  仓库名称
    *
    * @return string
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string $repositoryName 仓库名称
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets offset
    *  起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始索引，默认值为0。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
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
    * @param int|null $limit 返回条数，默认为10，最大值为100。**注意：offset和limit参数需要配套使用，offset必须为0或者为limit的倍数。**
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets isAccessory
    *  是否返回制品附件，默认为true
    *
    * @return bool|null
    */
    public function getIsAccessory()
    {
        return $this->container['isAccessory'];
    }

    /**
    * Sets isAccessory
    *
    * @param bool|null $isAccessory 是否返回制品附件，默认为true
    *
    * @return $this
    */
    public function setIsAccessory($isAccessory)
    {
        $this->container['isAccessory'] = $isAccessory;
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

