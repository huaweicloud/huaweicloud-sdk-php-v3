<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnlargeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnlargeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  当前进行节点扩容的DDM实例底层虚机规格id
    * nodeNumber  需要扩容的节点个数
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * availableZones  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => 'string',
            'nodeNumber' => 'int',
            'groupId' => 'string',
            'isAutoPay' => 'bool',
            'availableZones' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  当前进行节点扩容的DDM实例底层虚机规格id
    * nodeNumber  需要扩容的节点个数
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * availableZones  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'nodeNumber' => null,
        'groupId' => null,
        'isAutoPay' => null,
        'availableZones' => null
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
    * flavorId  当前进行节点扩容的DDM实例底层虚机规格id
    * nodeNumber  需要扩容的节点个数
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * availableZones  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'nodeNumber' => 'node_number',
            'groupId' => 'group_id',
            'isAutoPay' => 'is_auto_pay',
            'availableZones' => 'available_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  当前进行节点扩容的DDM实例底层虚机规格id
    * nodeNumber  需要扩容的节点个数
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * availableZones  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'nodeNumber' => 'setNodeNumber',
            'groupId' => 'setGroupId',
            'isAutoPay' => 'setIsAutoPay',
            'availableZones' => 'setAvailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  当前进行节点扩容的DDM实例底层虚机规格id
    * nodeNumber  需要扩容的节点个数
    * groupId  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    * isAutoPay  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    * availableZones  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'nodeNumber' => 'getNodeNumber',
            'groupId' => 'getGroupId',
            'isAutoPay' => 'getIsAutoPay',
            'availableZones' => 'getAvailableZones'
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['nodeNumber'] = isset($data['nodeNumber']) ? $data['nodeNumber'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['nodeNumber'] === null) {
            $invalidProperties[] = "'nodeNumber' can't be null";
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
    * Gets flavorId
    *  当前进行节点扩容的DDM实例底层虚机规格id
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 当前进行节点扩容的DDM实例底层虚机规格id
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets nodeNumber
    *  需要扩容的节点个数
    *
    * @return int
    */
    public function getNodeNumber()
    {
        return $this->container['nodeNumber'];
    }

    /**
    * Sets nodeNumber
    *
    * @param int $nodeNumber 需要扩容的节点个数
    *
    * @return $this
    */
    public function setNodeNumber($nodeNumber)
    {
        $this->container['nodeNumber'] = $nodeNumber;
        return $this;
    }

    /**
    * Gets groupId
    *  组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组id，指定当前进行节点扩容的组。当实例的组>1时，必填。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。true，表示自动从账户中支付。false，表示手动从账户中支付，默认为该方式。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones 可用区Code，仅包年包月实例传递该参数，个数需与node_number一致。请参见地区和终端节点(https://developer.huaweicloud.com/endpoint?DDM)。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
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

