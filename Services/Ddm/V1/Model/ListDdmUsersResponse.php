<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDdmUsersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDdmUsersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * users  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    * offset  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
    * limit  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    * total  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'users' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListDetailResponsesV3[]',
            'offset' => 'int',
            'limit' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * users  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    * offset  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
    * limit  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    * total  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'users' => null,
        'offset' => null,
        'limit' => null,
        'total' => null
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
    * users  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    * offset  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
    * limit  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    * total  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'users' => 'users',
            'offset' => 'offset',
            'limit' => 'limit',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * users  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    * offset  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
    * limit  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    * total  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'users' => 'setUsers',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * users  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    * offset  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
    * limit  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    * total  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'users' => 'getUsers',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'total' => 'getTotal'
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
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets users
    *  **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListDetailResponsesV3[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListDetailResponsesV3[]|null $users **参数解释**：  DDM实例账号相关信息的集合。  **取值范围**：  不涉及
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
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
    * @param int|null $offset **参数解释**：  分页参数: 起始值。  **取值范围**：   大于等于0。
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
    *  **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
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
    * @param int|null $limit **参数解释**：  分页参数: 每页记录数。  **取值范围**：  大于0且小于等于128。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**：  总记录数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

