<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySubCustomerListReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySubCustomerListReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    * customer  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    * offset  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
    * limit  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    * label  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    * associationType  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    * associatedOnBegin  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * associatedOnEnd  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * customerId  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    * indirectPartnerId  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'customer' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'label' => 'string',
            'associationType' => 'string',
            'associatedOnBegin' => 'string',
            'associatedOnEnd' => 'string',
            'customerId' => 'string',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    * customer  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    * offset  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
    * limit  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    * label  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    * associationType  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    * associatedOnBegin  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * associatedOnEnd  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * customerId  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    * indirectPartnerId  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'customer' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'label' => null,
        'associationType' => null,
        'associatedOnBegin' => null,
        'associatedOnEnd' => null,
        'customerId' => null,
        'indirectPartnerId' => null
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
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    * customer  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    * offset  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
    * limit  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    * label  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    * associationType  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    * associatedOnBegin  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * associatedOnEnd  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * customerId  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    * indirectPartnerId  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'customer' => 'customer',
            'offset' => 'offset',
            'limit' => 'limit',
            'label' => 'label',
            'associationType' => 'association_type',
            'associatedOnBegin' => 'associated_on_begin',
            'associatedOnEnd' => 'associated_on_end',
            'customerId' => 'customer_id',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    * customer  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    * offset  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
    * limit  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    * label  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    * associationType  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    * associatedOnBegin  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * associatedOnEnd  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * customerId  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    * indirectPartnerId  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'customer' => 'setCustomer',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'label' => 'setLabel',
            'associationType' => 'setAssociationType',
            'associatedOnBegin' => 'setAssociatedOnBegin',
            'associatedOnEnd' => 'setAssociatedOnEnd',
            'customerId' => 'setCustomerId',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    * customer  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    * offset  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
    * limit  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    * label  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    * associationType  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    * associatedOnBegin  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * associatedOnEnd  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * customerId  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    * indirectPartnerId  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'customer' => 'getCustomer',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'label' => 'getLabel',
            'associationType' => 'getAssociationType',
            'associatedOnBegin' => 'getAssociatedOnBegin',
            'associatedOnEnd' => 'getAssociatedOnEnd',
            'customerId' => 'getCustomerId',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['associatedOnBegin'] = isset($data['associatedOnBegin']) ? $data['associatedOnBegin'] : null;
        $this->container['associatedOnEnd'] = isset($data['associatedOnEnd']) ? $data['associatedOnEnd'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 128)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['customer']) && (mb_strlen($this->container['customer']) > 128)) {
                $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['customer']) && (mb_strlen($this->container['customer']) < 0)) {
                $invalidProperties[] = "invalid value for 'customer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
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
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 64)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associationType']) && (mb_strlen($this->container['associationType']) > 2)) {
                $invalidProperties[] = "invalid value for 'associationType', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['associationType']) && (mb_strlen($this->container['associationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedOnBegin']) && (mb_strlen($this->container['associatedOnBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'associatedOnBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['associatedOnBegin']) && (mb_strlen($this->container['associatedOnBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedOnBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedOnEnd']) && (mb_strlen($this->container['associatedOnEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'associatedOnEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['associatedOnEnd']) && (mb_strlen($this->container['associatedOnEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedOnEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets accountName
    *  |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName |参数名称：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处需要填写主账号登录名称。关于主账号和子用户的具体介绍请参见身份管理身份管理中“账号”和“IAM用户”的描述）。支持模糊查询。|
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets customer
    *  |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    *
    * @return string|null
    */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
    * Sets customer
    *
    * @param string|null $customer |参数名称：实名认证名称。支持模糊查询。| |参数约束及描述：实名认证名称。支持模糊查询。|
    *
    * @return $this
    */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
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
    * @param int|null $offset |参数名称：偏移量，从0开始| |参数约束及描述： 偏移量，从0开始|
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
    *  |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
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
    * @param int|null $limit |参数名称：每次查询的数量。默认10，最多100。| |参数约束及描述： 每次查询的数量。默认10，最多100。|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets label
    *  |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label |参数名称：标签，支持模糊查找。| |参数约束及描述：非必填，最大长度64|
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets associationType
    *  |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    *
    * @return string|null
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string|null $associationType |参数名称：关联类型1.推荐，2.垫付，3.转售| |参数约束及描述：非必填，最大长度2|
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
        return $this;
    }

    /**
    * Gets associatedOnBegin
    *  |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    *
    * @return string|null
    */
    public function getAssociatedOnBegin()
    {
        return $this->container['associatedOnBegin'];
    }

    /**
    * Sets associatedOnBegin
    *
    * @param string|null $associatedOnBegin |参数名称：关联时间区间段开始，UTC时间。| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    *
    * @return $this
    */
    public function setAssociatedOnBegin($associatedOnBegin)
    {
        $this->container['associatedOnBegin'] = $associatedOnBegin;
        return $this;
    }

    /**
    * Gets associatedOnEnd
    *  |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    *
    * @return string|null
    */
    public function getAssociatedOnEnd()
    {
        return $this->container['associatedOnEnd'];
    }

    /**
    * Sets associatedOnEnd
    *
    * @param string|null $associatedOnEnd |参数名称：关联时间区间段结束，UTC时间| |参数约束及描述：格式为：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    *
    * @return $this
    */
    public function setAssociatedOnEnd($associatedOnEnd)
    {
        $this->container['associatedOnEnd'] = $associatedOnEnd;
        return $this;
    }

    /**
    * Gets customerId
    *  |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId |参数名称：子客户ID| |参数约束及描述：非必填，最大长度64|
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId |参数名称：二级渠道商ID| |参数约束及描述：如果想查询二级渠道子客户的列表，该字段必须携带，最大长度64|
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

