<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnvironmentHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnvironmentHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationId  应用id
    * environmentId  环境id
    * keyField  主机名、ip关键字模糊搜索
    * asProxy  是否为代理机,true为代理机
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationId' => 'string',
            'environmentId' => 'string',
            'keyField' => 'string',
            'asProxy' => 'bool',
            'pageIndex' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationId  应用id
    * environmentId  环境id
    * keyField  主机名、ip关键字模糊搜索
    * asProxy  是否为代理机,true为代理机
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'environmentId' => null,
        'keyField' => null,
        'asProxy' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32'
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
    * applicationId  应用id
    * environmentId  环境id
    * keyField  主机名、ip关键字模糊搜索
    * asProxy  是否为代理机,true为代理机
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationId' => 'application_id',
            'environmentId' => 'environment_id',
            'keyField' => 'key_field',
            'asProxy' => 'as_proxy',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationId  应用id
    * environmentId  环境id
    * keyField  主机名、ip关键字模糊搜索
    * asProxy  是否为代理机,true为代理机
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationId' => 'setApplicationId',
            'environmentId' => 'setEnvironmentId',
            'keyField' => 'setKeyField',
            'asProxy' => 'setAsProxy',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationId  应用id
    * environmentId  环境id
    * keyField  主机名、ip关键字模糊搜索
    * asProxy  是否为代理机,true为代理机
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationId' => 'getApplicationId',
            'environmentId' => 'getEnvironmentId',
            'keyField' => 'getKeyField',
            'asProxy' => 'getAsProxy',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize'
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['keyField'] = isset($data['keyField']) ? $data['keyField'] : null;
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
            if ((mb_strlen($this->container['applicationId']) > 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['applicationId']) < 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['applicationId'])) {
                $invalidProperties[] = "invalid value for 'applicationId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['environmentId'] === null) {
            $invalidProperties[] = "'environmentId' can't be null";
        }
            if ((mb_strlen($this->container['environmentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['environmentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['environmentId'])) {
                $invalidProperties[] = "invalid value for 'environmentId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            if (!is_null($this->container['keyField']) && (mb_strlen($this->container['keyField']) > 128)) {
                $invalidProperties[] = "invalid value for 'keyField', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['keyField']) && (mb_strlen($this->container['keyField']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyField', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyField']) && !preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['keyField'])) {
                $invalidProperties[] = "invalid value for 'keyField', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    * Gets applicationId
    *  应用id
    *
    * @return string
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets environmentId
    *  环境id
    *
    * @return string
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string $environmentId 环境id
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets keyField
    *  主机名、ip关键字模糊搜索
    *
    * @return string|null
    */
    public function getKeyField()
    {
        return $this->container['keyField'];
    }

    /**
    * Sets keyField
    *
    * @param string|null $keyField 主机名、ip关键字模糊搜索
    *
    * @return $this
    */
    public function setKeyField($keyField)
    {
        $this->container['keyField'] = $keyField;
        return $this;
    }

    /**
    * Gets asProxy
    *  是否为代理机,true为代理机
    *
    * @return bool|null
    */
    public function getAsProxy()
    {
        return $this->container['asProxy'];
    }

    /**
    * Sets asProxy
    *
    * @param bool|null $asProxy 是否为代理机,true为代理机
    *
    * @return $this
    */
    public function setAsProxy($asProxy)
    {
        $this->container['asProxy'] = $asProxy;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页页码
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 分页页码
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页查询每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页查询每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

