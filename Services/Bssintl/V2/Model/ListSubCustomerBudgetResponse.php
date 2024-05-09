<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerBudgetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerBudgetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * measureId  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    * currency  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    * budgetInfos  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'measureId' => 'int',
            'currency' => 'string',
            'budgetInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\BudgetInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * measureId  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    * currency  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    * budgetInfos  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'measureId' => 'int32',
        'currency' => null,
        'budgetInfos' => null
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
    * measureId  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    * currency  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    * budgetInfos  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'budgetInfos' => 'budget_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * measureId  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    * currency  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    * budgetInfos  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @var string[]
    */
    protected static $setters = [
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'budgetInfos' => 'setBudgetInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * measureId  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    * currency  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    * budgetInfos  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @var string[]
    */
    protected static $getters = [
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'budgetInfos' => 'getBudgetInfos'
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
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['budgetInfos'] = isset($data['budgetInfos']) ? $data['budgetInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 4)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
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
    * Gets measureId
    *  |参数名称：金额单位。||参数的约束及描述：非必填参数|
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId |参数名称：金额单位。||参数的约束及描述：非必填参数|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets currency
    *  |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency |参数名称：货币，CNY：人民币，USD：美元||参数的约束及描述：非必填参数|
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets budgetInfos
    *  |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\BudgetInfo[]|null
    */
    public function getBudgetInfos()
    {
        return $this->container['budgetInfos'];
    }

    /**
    * Sets budgetInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\BudgetInfo[]|null $budgetInfos |参数名称：客户预算信息||参数的约束及描述：必填参数|
    *
    * @return $this
    */
    public function setBudgetInfos($budgetInfos)
    {
        $this->container['budgetInfos'] = $budgetInfos;
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

