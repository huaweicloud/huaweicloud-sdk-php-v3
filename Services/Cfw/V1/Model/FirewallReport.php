<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackInfo  attackInfo
    * category  **参数解释**： 报告类型 **取值范围**： 不涉及
    * internetFirewall  internetFirewall
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    * vpcFirewall  vpcFirewall
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackInfo' => '\HuaweiCloud\SDK\Cfw\V1\Model\AttackReport',
            'category' => 'string',
            'internetFirewall' => '\HuaweiCloud\SDK\Cfw\V1\Model\InternetReport',
            'sendTime' => 'int',
            'statisticPeriod' => '\HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod',
            'vpcFirewall' => '\HuaweiCloud\SDK\Cfw\V1\Model\VpcReport'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackInfo  attackInfo
    * category  **参数解释**： 报告类型 **取值范围**： 不涉及
    * internetFirewall  internetFirewall
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    * vpcFirewall  vpcFirewall
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackInfo' => null,
        'category' => null,
        'internetFirewall' => null,
        'sendTime' => 'int64',
        'statisticPeriod' => null,
        'vpcFirewall' => null
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
    * attackInfo  attackInfo
    * category  **参数解释**： 报告类型 **取值范围**： 不涉及
    * internetFirewall  internetFirewall
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    * vpcFirewall  vpcFirewall
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackInfo' => 'attack_info',
            'category' => 'category',
            'internetFirewall' => 'internet_firewall',
            'sendTime' => 'send_time',
            'statisticPeriod' => 'statistic_period',
            'vpcFirewall' => 'vpc_firewall'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackInfo  attackInfo
    * category  **参数解释**： 报告类型 **取值范围**： 不涉及
    * internetFirewall  internetFirewall
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    * vpcFirewall  vpcFirewall
    *
    * @var string[]
    */
    protected static $setters = [
            'attackInfo' => 'setAttackInfo',
            'category' => 'setCategory',
            'internetFirewall' => 'setInternetFirewall',
            'sendTime' => 'setSendTime',
            'statisticPeriod' => 'setStatisticPeriod',
            'vpcFirewall' => 'setVpcFirewall'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackInfo  attackInfo
    * category  **参数解释**： 报告类型 **取值范围**： 不涉及
    * internetFirewall  internetFirewall
    * sendTime  **参数解释**： 发送时间 **取值范围**： 不涉及
    * statisticPeriod  statisticPeriod
    * vpcFirewall  vpcFirewall
    *
    * @var string[]
    */
    protected static $getters = [
            'attackInfo' => 'getAttackInfo',
            'category' => 'getCategory',
            'internetFirewall' => 'getInternetFirewall',
            'sendTime' => 'getSendTime',
            'statisticPeriod' => 'getStatisticPeriod',
            'vpcFirewall' => 'getVpcFirewall'
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
        $this->container['attackInfo'] = isset($data['attackInfo']) ? $data['attackInfo'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['internetFirewall'] = isset($data['internetFirewall']) ? $data['internetFirewall'] : null;
        $this->container['sendTime'] = isset($data['sendTime']) ? $data['sendTime'] : null;
        $this->container['statisticPeriod'] = isset($data['statisticPeriod']) ? $data['statisticPeriod'] : null;
        $this->container['vpcFirewall'] = isset($data['vpcFirewall']) ? $data['vpcFirewall'] : null;
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
    * Gets attackInfo
    *  attackInfo
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AttackReport|null
    */
    public function getAttackInfo()
    {
        return $this->container['attackInfo'];
    }

    /**
    * Sets attackInfo
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AttackReport|null $attackInfo attackInfo
    *
    * @return $this
    */
    public function setAttackInfo($attackInfo)
    {
        $this->container['attackInfo'] = $attackInfo;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 报告类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 报告类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets internetFirewall
    *  internetFirewall
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\InternetReport|null
    */
    public function getInternetFirewall()
    {
        return $this->container['internetFirewall'];
    }

    /**
    * Sets internetFirewall
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\InternetReport|null $internetFirewall internetFirewall
    *
    * @return $this
    */
    public function setInternetFirewall($internetFirewall)
    {
        $this->container['internetFirewall'] = $internetFirewall;
        return $this;
    }

    /**
    * Gets sendTime
    *  **参数解释**： 发送时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSendTime()
    {
        return $this->container['sendTime'];
    }

    /**
    * Sets sendTime
    *
    * @param int|null $sendTime **参数解释**： 发送时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSendTime($sendTime)
    {
        $this->container['sendTime'] = $sendTime;
        return $this;
    }

    /**
    * Gets statisticPeriod
    *  statisticPeriod
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null
    */
    public function getStatisticPeriod()
    {
        return $this->container['statisticPeriod'];
    }

    /**
    * Sets statisticPeriod
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\StatisticPeriod|null $statisticPeriod statisticPeriod
    *
    * @return $this
    */
    public function setStatisticPeriod($statisticPeriod)
    {
        $this->container['statisticPeriod'] = $statisticPeriod;
        return $this;
    }

    /**
    * Gets vpcFirewall
    *  vpcFirewall
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\VpcReport|null
    */
    public function getVpcFirewall()
    {
        return $this->container['vpcFirewall'];
    }

    /**
    * Sets vpcFirewall
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\VpcReport|null $vpcFirewall vpcFirewall
    *
    * @return $this
    */
    public function setVpcFirewall($vpcFirewall)
    {
        $this->container['vpcFirewall'] = $vpcFirewall;
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

