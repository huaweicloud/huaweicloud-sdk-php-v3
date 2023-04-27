<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultAssociate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultAssociate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destinationVaultId  目标vault ID , 只有设置复制策略时使用，而且必传
    * policyId  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    * addPolicyIds  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destinationVaultId' => 'string',
            'policyId' => 'string',
            'addPolicyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destinationVaultId  目标vault ID , 只有设置复制策略时使用，而且必传
    * policyId  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    * addPolicyIds  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destinationVaultId' => null,
        'policyId' => null,
        'addPolicyIds' => null
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
    * destinationVaultId  目标vault ID , 只有设置复制策略时使用，而且必传
    * policyId  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    * addPolicyIds  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destinationVaultId' => 'destination_vault_id',
            'policyId' => 'policy_id',
            'addPolicyIds' => 'add_policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destinationVaultId  目标vault ID , 只有设置复制策略时使用，而且必传
    * policyId  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    * addPolicyIds  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'destinationVaultId' => 'setDestinationVaultId',
            'policyId' => 'setPolicyId',
            'addPolicyIds' => 'setAddPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destinationVaultId  目标vault ID , 只有设置复制策略时使用，而且必传
    * policyId  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    * addPolicyIds  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'destinationVaultId' => 'getDestinationVaultId',
            'policyId' => 'getPolicyId',
            'addPolicyIds' => 'getAddPolicyIds'
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
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['addPolicyIds'] = isset($data['addPolicyIds']) ? $data['addPolicyIds'] : null;
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
    * Gets destinationVaultId
    *  目标vault ID , 只有设置复制策略时使用，而且必传
    *
    * @return string|null
    */
    public function getDestinationVaultId()
    {
        return $this->container['destinationVaultId'];
    }

    /**
    * Sets destinationVaultId
    *
    * @param string|null $destinationVaultId 目标vault ID , 只有设置复制策略时使用，而且必传
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets addPolicyIds
    *  多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @return string[]|null
    */
    public function getAddPolicyIds()
    {
        return $this->container['addPolicyIds'];
    }

    /**
    * Sets addPolicyIds
    *
    * @param string[]|null $addPolicyIds 多策略场景下，绑定新策略的id列表。policy_id字段与add_policy_ids字段在一次请求中有且只有一个。
    *
    * @return $this
    */
    public function setAddPolicyIds($addPolicyIds)
    {
        $this->container['addPolicyIds'] = $addPolicyIds;
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

