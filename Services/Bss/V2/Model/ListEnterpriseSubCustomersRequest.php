<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseSubCustomersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseSubCustomersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subCustomerAccountName  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    * subCustomerDisplayName  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    * fuzzyQuery  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数，默认值为10。
    * orgId  子账号归属的组织单元ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subCustomerAccountName' => 'string',
            'subCustomerDisplayName' => 'string',
            'fuzzyQuery' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'orgId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subCustomerAccountName  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    * subCustomerDisplayName  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    * fuzzyQuery  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数，默认值为10。
    * orgId  子账号归属的组织单元ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subCustomerAccountName' => null,
        'subCustomerDisplayName' => null,
        'fuzzyQuery' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32',
        'orgId' => null
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
    * subCustomerAccountName  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    * subCustomerDisplayName  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    * fuzzyQuery  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数，默认值为10。
    * orgId  子账号归属的组织单元ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subCustomerAccountName' => 'sub_customer_account_name',
            'subCustomerDisplayName' => 'sub_customer_display_name',
            'fuzzyQuery' => 'fuzzy_query',
            'offset' => 'offset',
            'limit' => 'limit',
            'orgId' => 'org_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subCustomerAccountName  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    * subCustomerDisplayName  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    * fuzzyQuery  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数，默认值为10。
    * orgId  子账号归属的组织单元ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'subCustomerAccountName' => 'setSubCustomerAccountName',
            'subCustomerDisplayName' => 'setSubCustomerDisplayName',
            'fuzzyQuery' => 'setFuzzyQuery',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orgId' => 'setOrgId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subCustomerAccountName  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    * subCustomerDisplayName  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    * fuzzyQuery  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询记录数，默认值为10。
    * orgId  子账号归属的组织单元ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'subCustomerAccountName' => 'getSubCustomerAccountName',
            'subCustomerDisplayName' => 'getSubCustomerDisplayName',
            'fuzzyQuery' => 'getFuzzyQuery',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orgId' => 'getOrgId'
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
        $this->container['subCustomerAccountName'] = isset($data['subCustomerAccountName']) ? $data['subCustomerAccountName'] : null;
        $this->container['subCustomerDisplayName'] = isset($data['subCustomerDisplayName']) ? $data['subCustomerDisplayName'] : null;
        $this->container['fuzzyQuery'] = isset($data['fuzzyQuery']) ? $data['fuzzyQuery'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fuzzyQuery']) && ($this->container['fuzzyQuery'] > 1)) {
                $invalidProperties[] = "invalid value for 'fuzzyQuery', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['fuzzyQuery']) && ($this->container['fuzzyQuery'] < 0)) {
                $invalidProperties[] = "invalid value for 'fuzzyQuery', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets subCustomerAccountName
    *  企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    *
    * @return string|null
    */
    public function getSubCustomerAccountName()
    {
        return $this->container['subCustomerAccountName'];
    }

    /**
    * Sets subCustomerAccountName
    *
    * @param string|null $subCustomerAccountName 企业子账号的账号名。根据fuzzy_query取值决定是否按模糊查询。
    *
    * @return $this
    */
    public function setSubCustomerAccountName($subCustomerAccountName)
    {
        $this->container['subCustomerAccountName'] = $subCustomerAccountName;
        return $this;
    }

    /**
    * Gets subCustomerDisplayName
    *  企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    *
    * @return string|null
    */
    public function getSubCustomerDisplayName()
    {
        return $this->container['subCustomerDisplayName'];
    }

    /**
    * Sets subCustomerDisplayName
    *
    * @param string|null $subCustomerDisplayName 企业子账号的显示名称。不限制特殊字符。根据fuzzy_query取值决定是否按模糊查询。
    *
    * @return $this
    */
    public function setSubCustomerDisplayName($subCustomerDisplayName)
    {
        $this->container['subCustomerDisplayName'] = $subCustomerDisplayName;
        return $this;
    }

    /**
    * Gets fuzzyQuery
    *  企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    *
    * @return int|null
    */
    public function getFuzzyQuery()
    {
        return $this->container['fuzzyQuery'];
    }

    /**
    * Sets fuzzyQuery
    *
    * @param int|null $fuzzyQuery 企业子账号的显示名称、用户名是否按模糊查询。0：不按模糊查询1：按模糊查询默认值为0。
    *
    * @return $this
    */
    public function setFuzzyQuery($fuzzyQuery)
    {
        $this->container['fuzzyQuery'] = $fuzzyQuery;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  每次查询记录数，默认值为10。
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
    * @param int|null $limit 每次查询记录数，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orgId
    *  子账号归属的组织单元ID。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 子账号归属的组织单元ID。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
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

