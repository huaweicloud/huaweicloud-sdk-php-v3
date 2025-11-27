<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Spec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规格名称。
    * code  规格编号。
    * cbcCode  规格cbc编码。
    * ruleMax  最大规则数。
    * sessMax  最大连接数。
    * bpsMax  最大bps。
    * ppsMax  最大pps。
    * qpsMax  最大qps。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'code' => 'string',
            'cbcCode' => 'string',
            'ruleMax' => 'int',
            'sessMax' => 'int',
            'bpsMax' => 'int',
            'ppsMax' => 'int',
            'qpsMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规格名称。
    * code  规格编号。
    * cbcCode  规格cbc编码。
    * ruleMax  最大规则数。
    * sessMax  最大连接数。
    * bpsMax  最大bps。
    * ppsMax  最大pps。
    * qpsMax  最大qps。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'code' => null,
        'cbcCode' => null,
        'ruleMax' => 'int32',
        'sessMax' => 'int32',
        'bpsMax' => 'int32',
        'ppsMax' => 'int32',
        'qpsMax' => 'int32'
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
    * name  规格名称。
    * code  规格编号。
    * cbcCode  规格cbc编码。
    * ruleMax  最大规则数。
    * sessMax  最大连接数。
    * bpsMax  最大bps。
    * ppsMax  最大pps。
    * qpsMax  最大qps。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'code' => 'code',
            'cbcCode' => 'cbc_code',
            'ruleMax' => 'rule_max',
            'sessMax' => 'sess_max',
            'bpsMax' => 'bps_max',
            'ppsMax' => 'pps_max',
            'qpsMax' => 'qps_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规格名称。
    * code  规格编号。
    * cbcCode  规格cbc编码。
    * ruleMax  最大规则数。
    * sessMax  最大连接数。
    * bpsMax  最大bps。
    * ppsMax  最大pps。
    * qpsMax  最大qps。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'code' => 'setCode',
            'cbcCode' => 'setCbcCode',
            'ruleMax' => 'setRuleMax',
            'sessMax' => 'setSessMax',
            'bpsMax' => 'setBpsMax',
            'ppsMax' => 'setPpsMax',
            'qpsMax' => 'setQpsMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规格名称。
    * code  规格编号。
    * cbcCode  规格cbc编码。
    * ruleMax  最大规则数。
    * sessMax  最大连接数。
    * bpsMax  最大bps。
    * ppsMax  最大pps。
    * qpsMax  最大qps。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'code' => 'getCode',
            'cbcCode' => 'getCbcCode',
            'ruleMax' => 'getRuleMax',
            'sessMax' => 'getSessMax',
            'bpsMax' => 'getBpsMax',
            'ppsMax' => 'getPpsMax',
            'qpsMax' => 'getQpsMax'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['cbcCode'] = isset($data['cbcCode']) ? $data['cbcCode'] : null;
        $this->container['ruleMax'] = isset($data['ruleMax']) ? $data['ruleMax'] : null;
        $this->container['sessMax'] = isset($data['sessMax']) ? $data['sessMax'] : null;
        $this->container['bpsMax'] = isset($data['bpsMax']) ? $data['bpsMax'] : null;
        $this->container['ppsMax'] = isset($data['ppsMax']) ? $data['ppsMax'] : null;
        $this->container['qpsMax'] = isset($data['qpsMax']) ? $data['qpsMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 36)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 2)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cbcCode']) && (mb_strlen($this->container['cbcCode']) > 36)) {
                $invalidProperties[] = "invalid value for 'cbcCode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['cbcCode']) && (mb_strlen($this->container['cbcCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'cbcCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleMax']) && ($this->container['ruleMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'ruleMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['ruleMax']) && ($this->container['ruleMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'ruleMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessMax']) && ($this->container['sessMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'sessMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['sessMax']) && ($this->container['sessMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'sessMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bpsMax']) && ($this->container['bpsMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'bpsMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['bpsMax']) && ($this->container['bpsMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'bpsMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ppsMax']) && ($this->container['ppsMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'ppsMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['ppsMax']) && ($this->container['ppsMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'ppsMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['qpsMax']) && ($this->container['qpsMax'] > 65535)) {
                $invalidProperties[] = "invalid value for 'qpsMax', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['qpsMax']) && ($this->container['qpsMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'qpsMax', must be bigger than or equal to 0.";
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
    * Gets name
    *  规格名称。
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
    * @param string|null $name 规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets code
    *  规格编号。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 规格编号。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets cbcCode
    *  规格cbc编码。
    *
    * @return string|null
    */
    public function getCbcCode()
    {
        return $this->container['cbcCode'];
    }

    /**
    * Sets cbcCode
    *
    * @param string|null $cbcCode 规格cbc编码。
    *
    * @return $this
    */
    public function setCbcCode($cbcCode)
    {
        $this->container['cbcCode'] = $cbcCode;
        return $this;
    }

    /**
    * Gets ruleMax
    *  最大规则数。
    *
    * @return int|null
    */
    public function getRuleMax()
    {
        return $this->container['ruleMax'];
    }

    /**
    * Sets ruleMax
    *
    * @param int|null $ruleMax 最大规则数。
    *
    * @return $this
    */
    public function setRuleMax($ruleMax)
    {
        $this->container['ruleMax'] = $ruleMax;
        return $this;
    }

    /**
    * Gets sessMax
    *  最大连接数。
    *
    * @return int|null
    */
    public function getSessMax()
    {
        return $this->container['sessMax'];
    }

    /**
    * Sets sessMax
    *
    * @param int|null $sessMax 最大连接数。
    *
    * @return $this
    */
    public function setSessMax($sessMax)
    {
        $this->container['sessMax'] = $sessMax;
        return $this;
    }

    /**
    * Gets bpsMax
    *  最大bps。
    *
    * @return int|null
    */
    public function getBpsMax()
    {
        return $this->container['bpsMax'];
    }

    /**
    * Sets bpsMax
    *
    * @param int|null $bpsMax 最大bps。
    *
    * @return $this
    */
    public function setBpsMax($bpsMax)
    {
        $this->container['bpsMax'] = $bpsMax;
        return $this;
    }

    /**
    * Gets ppsMax
    *  最大pps。
    *
    * @return int|null
    */
    public function getPpsMax()
    {
        return $this->container['ppsMax'];
    }

    /**
    * Sets ppsMax
    *
    * @param int|null $ppsMax 最大pps。
    *
    * @return $this
    */
    public function setPpsMax($ppsMax)
    {
        $this->container['ppsMax'] = $ppsMax;
        return $this;
    }

    /**
    * Gets qpsMax
    *  最大qps。
    *
    * @return int|null
    */
    public function getQpsMax()
    {
        return $this->container['qpsMax'];
    }

    /**
    * Sets qpsMax
    *
    * @param int|null $qpsMax 最大qps。
    *
    * @return $this
    */
    public function setQpsMax($qpsMax)
    {
        $this->container['qpsMax'] = $qpsMax;
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

