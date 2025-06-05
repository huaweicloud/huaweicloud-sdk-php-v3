<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKeystorePermissionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKeystorePermissionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keystoreId  文件秘钥Id
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * page  分页页码，表示从此页开始查询，page大于等于1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keystoreId' => 'string',
            'pageSize' => 'int',
            'page' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keystoreId  文件秘钥Id
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * page  分页页码，表示从此页开始查询，page大于等于1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keystoreId' => null,
        'pageSize' => 'int32',
        'page' => null
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
    * keystoreId  文件秘钥Id
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * page  分页页码，表示从此页开始查询，page大于等于1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keystoreId' => 'keystore_id',
            'pageSize' => 'page_size',
            'page' => 'page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keystoreId  文件秘钥Id
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * page  分页页码，表示从此页开始查询，page大于等于1
    *
    * @var string[]
    */
    protected static $setters = [
            'keystoreId' => 'setKeystoreId',
            'pageSize' => 'setPageSize',
            'page' => 'setPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keystoreId  文件秘钥Id
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * page  分页页码，表示从此页开始查询，page大于等于1
    *
    * @var string[]
    */
    protected static $getters = [
            'keystoreId' => 'getKeystoreId',
            'pageSize' => 'getPageSize',
            'page' => 'getPage'
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
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keystoreId'] === null) {
            $invalidProperties[] = "'keystoreId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['keystoreId'])) {
                $invalidProperties[] = "invalid value for 'keystoreId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
            }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
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
    * Gets keystoreId
    *  文件秘钥Id
    *
    * @return string
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string $keystoreId 文件秘钥Id
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets page
    *  分页页码，表示从此页开始查询，page大于等于1
    *
    * @return string
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param string $page 分页页码，表示从此页开始查询，page大于等于1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
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

