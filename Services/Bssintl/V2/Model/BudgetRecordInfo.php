<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BudgetRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BudgetRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * budgetAmount  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    * operationType  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    * operationTime  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    * operator  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    * partnerCorpName  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    * partnerAccountName  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'budgetAmount' => 'float',
            'operationType' => 'string',
            'operationTime' => 'string',
            'operator' => 'string',
            'budgetType' => 'string',
            'partnerCorpName' => 'string',
            'partnerAccountName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * budgetAmount  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    * operationType  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    * operationTime  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    * operator  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    * partnerCorpName  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    * partnerAccountName  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'budgetAmount' => 'bigdecimal',
        'operationType' => null,
        'operationTime' => null,
        'operator' => null,
        'budgetType' => null,
        'partnerCorpName' => null,
        'partnerAccountName' => null
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
    * budgetAmount  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    * operationType  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    * operationTime  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    * operator  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    * partnerCorpName  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    * partnerAccountName  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'budgetAmount' => 'budget_amount',
            'operationType' => 'operation_type',
            'operationTime' => 'operation_time',
            'operator' => 'operator',
            'budgetType' => 'budget_type',
            'partnerCorpName' => 'partner_corp_name',
            'partnerAccountName' => 'partner_account_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * budgetAmount  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    * operationType  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    * operationTime  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    * operator  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    * partnerCorpName  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    * partnerAccountName  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @var string[]
    */
    protected static $setters = [
            'budgetAmount' => 'setBudgetAmount',
            'operationType' => 'setOperationType',
            'operationTime' => 'setOperationTime',
            'operator' => 'setOperator',
            'budgetType' => 'setBudgetType',
            'partnerCorpName' => 'setPartnerCorpName',
            'partnerAccountName' => 'setPartnerAccountName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * budgetAmount  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    * operationType  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    * operationTime  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    * operator  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    * partnerCorpName  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    * partnerAccountName  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @var string[]
    */
    protected static $getters = [
            'budgetAmount' => 'getBudgetAmount',
            'operationType' => 'getOperationType',
            'operationTime' => 'getOperationTime',
            'operator' => 'getOperator',
            'budgetType' => 'getBudgetType',
            'partnerCorpName' => 'getPartnerCorpName',
            'partnerAccountName' => 'getPartnerAccountName'
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
        $this->container['budgetAmount'] = isset($data['budgetAmount']) ? $data['budgetAmount'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['operationTime'] = isset($data['operationTime']) ? $data['operationTime'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['budgetType'] = isset($data['budgetType']) ? $data['budgetType'] : null;
        $this->container['partnerCorpName'] = isset($data['partnerCorpName']) ? $data['partnerCorpName'] : null;
        $this->container['partnerAccountName'] = isset($data['partnerAccountName']) ? $data['partnerAccountName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['budgetAmount']) && ($this->container['budgetAmount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'budgetAmount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['budgetAmount']) && ($this->container['budgetAmount'] < 0)) {
                $invalidProperties[] = "invalid value for 'budgetAmount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) > 10)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['operationType']) && (mb_strlen($this->container['operationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'operationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operationTime']) && (mb_strlen($this->container['operationTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'operationTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['operationTime']) && (mb_strlen($this->container['operationTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'operationTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 64)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['budgetType']) && (mb_strlen($this->container['budgetType']) > 10)) {
                $invalidProperties[] = "invalid value for 'budgetType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['budgetType']) && (mb_strlen($this->container['budgetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'budgetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partnerCorpName']) && (mb_strlen($this->container['partnerCorpName']) > 256)) {
                $invalidProperties[] = "invalid value for 'partnerCorpName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['partnerCorpName']) && (mb_strlen($this->container['partnerCorpName']) < 0)) {
                $invalidProperties[] = "invalid value for 'partnerCorpName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partnerAccountName']) && (mb_strlen($this->container['partnerAccountName']) > 128)) {
                $invalidProperties[] = "invalid value for 'partnerAccountName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['partnerAccountName']) && (mb_strlen($this->container['partnerAccountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'partnerAccountName', the character length must be bigger than or equal to 0.";
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
    * Gets budgetAmount
    *  |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    *
    * @return float|null
    */
    public function getBudgetAmount()
    {
        return $this->container['budgetAmount'];
    }

    /**
    * Sets budgetAmount
    *
    * @param float|null $budgetAmount |参数名称：预算金额||参数的约束及描述：单位：元，精确至小数点后2位。范围限制:0-2147483647|
    *
    * @return $this
    */
    public function setBudgetAmount($budgetAmount)
    {
        $this->container['budgetAmount'] = $budgetAmount;
        return $this;
    }

    /**
    * Gets operationType
    *  |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType |参数名称：操作类别| |参数的约束及描述：范围限制：0-10。SETTING：设置 DELETE：解除关联关系。|
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets operationTime
    *  |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    *
    * @return string|null
    */
    public function getOperationTime()
    {
        return $this->container['operationTime'];
    }

    /**
    * Sets operationTime
    *
    * @param string|null $operationTime |参数名称：操作时间| |参数的约束及描述：UTC时间，格式为：yyyy-MM-ddTHH:mm:ssZ。|
    *
    * @return $this
    */
    public function setOperationTime($operationTime)
    {
        $this->container['operationTime'] = $operationTime;
        return $this;
    }

    /**
    * Gets operator
    *  |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator |参数名称：操作员或系统system| |参数的约束及描述：范围限制：0-64|
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets budgetType
    *  |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    *
    * @return string|null
    */
    public function getBudgetType()
    {
        return $this->container['budgetType'];
    }

    /**
    * Sets budgetType
    *
    * @param string|null $budgetType |参数名称：预算模式| |参数的约束及描述：范围限制：0-10。MONTHLY：月度预算 PACKAGE：一次性预算|
    *
    * @return $this
    */
    public function setBudgetType($budgetType)
    {
        $this->container['budgetType'] = $budgetType;
        return $this;
    }

    /**
    * Gets partnerCorpName
    *  |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    *
    * @return string|null
    */
    public function getPartnerCorpName()
    {
        return $this->container['partnerCorpName'];
    }

    /**
    * Sets partnerCorpName
    *
    * @param string|null $partnerCorpName |参数名称：伙伴名称| |参数的约束及描述：范围限制：0-256|
    *
    * @return $this
    */
    public function setPartnerCorpName($partnerCorpName)
    {
        $this->container['partnerCorpName'] = $partnerCorpName;
        return $this;
    }

    /**
    * Gets partnerAccountName
    *  |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @return string|null
    */
    public function getPartnerAccountName()
    {
        return $this->container['partnerAccountName'];
    }

    /**
    * Sets partnerAccountName
    *
    * @param string|null $partnerAccountName |参数名称：伙伴账号名| |参数的约束及描述：范围限制：0-128|
    *
    * @return $this
    */
    public function setPartnerAccountName($partnerAccountName)
    {
        $this->container['partnerAccountName'] = $partnerAccountName;
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

