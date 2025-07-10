<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManagedAccountTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManagedAccountTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manageAccountId  管理纳管账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * blueprintProductId  模板ID。
    * blueprintProductName  模板名称。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * blueprintProductImplType  模板实现类型。
    * blueprintProductImplDetail  模板详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manageAccountId' => 'string',
            'accountId' => 'string',
            'accountName' => 'string',
            'blueprintProductId' => 'string',
            'blueprintProductName' => 'string',
            'blueprintProductVersion' => 'string',
            'blueprintStatus' => 'string',
            'blueprintProductImplType' => 'string',
            'blueprintProductImplDetail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manageAccountId  管理纳管账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * blueprintProductId  模板ID。
    * blueprintProductName  模板名称。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * blueprintProductImplType  模板实现类型。
    * blueprintProductImplDetail  模板详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manageAccountId' => null,
        'accountId' => null,
        'accountName' => null,
        'blueprintProductId' => null,
        'blueprintProductName' => null,
        'blueprintProductVersion' => null,
        'blueprintStatus' => null,
        'blueprintProductImplType' => null,
        'blueprintProductImplDetail' => null
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
    * manageAccountId  管理纳管账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * blueprintProductId  模板ID。
    * blueprintProductName  模板名称。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * blueprintProductImplType  模板实现类型。
    * blueprintProductImplDetail  模板详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manageAccountId' => 'manage_account_id',
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'blueprintProductId' => 'blueprint_product_id',
            'blueprintProductName' => 'blueprint_product_name',
            'blueprintProductVersion' => 'blueprint_product_version',
            'blueprintStatus' => 'blueprint_status',
            'blueprintProductImplType' => 'blueprint_product_impl_type',
            'blueprintProductImplDetail' => 'blueprint_product_impl_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manageAccountId  管理纳管账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * blueprintProductId  模板ID。
    * blueprintProductName  模板名称。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * blueprintProductImplType  模板实现类型。
    * blueprintProductImplDetail  模板详情
    *
    * @var string[]
    */
    protected static $setters = [
            'manageAccountId' => 'setManageAccountId',
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'blueprintProductId' => 'setBlueprintProductId',
            'blueprintProductName' => 'setBlueprintProductName',
            'blueprintProductVersion' => 'setBlueprintProductVersion',
            'blueprintStatus' => 'setBlueprintStatus',
            'blueprintProductImplType' => 'setBlueprintProductImplType',
            'blueprintProductImplDetail' => 'setBlueprintProductImplDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manageAccountId  管理纳管账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * blueprintProductId  模板ID。
    * blueprintProductName  模板名称。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * blueprintProductImplType  模板实现类型。
    * blueprintProductImplDetail  模板详情
    *
    * @var string[]
    */
    protected static $getters = [
            'manageAccountId' => 'getManageAccountId',
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'blueprintProductId' => 'getBlueprintProductId',
            'blueprintProductName' => 'getBlueprintProductName',
            'blueprintProductVersion' => 'getBlueprintProductVersion',
            'blueprintStatus' => 'getBlueprintStatus',
            'blueprintProductImplType' => 'getBlueprintProductImplType',
            'blueprintProductImplDetail' => 'getBlueprintProductImplDetail'
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
        $this->container['manageAccountId'] = isset($data['manageAccountId']) ? $data['manageAccountId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['blueprintProductId'] = isset($data['blueprintProductId']) ? $data['blueprintProductId'] : null;
        $this->container['blueprintProductName'] = isset($data['blueprintProductName']) ? $data['blueprintProductName'] : null;
        $this->container['blueprintProductVersion'] = isset($data['blueprintProductVersion']) ? $data['blueprintProductVersion'] : null;
        $this->container['blueprintStatus'] = isset($data['blueprintStatus']) ? $data['blueprintStatus'] : null;
        $this->container['blueprintProductImplType'] = isset($data['blueprintProductImplType']) ? $data['blueprintProductImplType'] : null;
        $this->container['blueprintProductImplDetail'] = isset($data['blueprintProductImplDetail']) ? $data['blueprintProductImplDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 32)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 6)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) > 128)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductName']) && (mb_strlen($this->container['blueprintProductName']) > 128)) {
                $invalidProperties[] = "invalid value for 'blueprintProductName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blueprintProductName']) && (mb_strlen($this->container['blueprintProductName']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductVersion']) && (mb_strlen($this->container['blueprintProductVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'blueprintProductVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blueprintProductVersion']) && (mb_strlen($this->container['blueprintProductVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintStatus']) && (mb_strlen($this->container['blueprintStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'blueprintStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blueprintStatus']) && (mb_strlen($this->container['blueprintStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductImplType']) && (mb_strlen($this->container['blueprintProductImplType']) > 64)) {
                $invalidProperties[] = "invalid value for 'blueprintProductImplType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blueprintProductImplType']) && (mb_strlen($this->container['blueprintProductImplType']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductImplType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['blueprintProductImplDetail']) && (mb_strlen($this->container['blueprintProductImplDetail']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductImplDetail', the character length must be bigger than or equal to 1.";
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
    * Gets manageAccountId
    *  管理纳管账号ID。
    *
    * @return string|null
    */
    public function getManageAccountId()
    {
        return $this->container['manageAccountId'];
    }

    /**
    * Sets manageAccountId
    *
    * @param string|null $manageAccountId 管理纳管账号ID。
    *
    * @return $this
    */
    public function setManageAccountId($manageAccountId)
    {
        $this->container['manageAccountId'] = $manageAccountId;
        return $this;
    }

    /**
    * Gets accountId
    *  纳管账号ID。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 纳管账号ID。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  纳管账号名称。
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
    * @param string|null $accountName 纳管账号名称。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets blueprintProductId
    *  模板ID。
    *
    * @return string|null
    */
    public function getBlueprintProductId()
    {
        return $this->container['blueprintProductId'];
    }

    /**
    * Sets blueprintProductId
    *
    * @param string|null $blueprintProductId 模板ID。
    *
    * @return $this
    */
    public function setBlueprintProductId($blueprintProductId)
    {
        $this->container['blueprintProductId'] = $blueprintProductId;
        return $this;
    }

    /**
    * Gets blueprintProductName
    *  模板名称。
    *
    * @return string|null
    */
    public function getBlueprintProductName()
    {
        return $this->container['blueprintProductName'];
    }

    /**
    * Sets blueprintProductName
    *
    * @param string|null $blueprintProductName 模板名称。
    *
    * @return $this
    */
    public function setBlueprintProductName($blueprintProductName)
    {
        $this->container['blueprintProductName'] = $blueprintProductName;
        return $this;
    }

    /**
    * Gets blueprintProductVersion
    *  模板版本。
    *
    * @return string|null
    */
    public function getBlueprintProductVersion()
    {
        return $this->container['blueprintProductVersion'];
    }

    /**
    * Sets blueprintProductVersion
    *
    * @param string|null $blueprintProductVersion 模板版本。
    *
    * @return $this
    */
    public function setBlueprintProductVersion($blueprintProductVersion)
    {
        $this->container['blueprintProductVersion'] = $blueprintProductVersion;
        return $this;
    }

    /**
    * Gets blueprintStatus
    *  模板部署状态，包括失败, 完成, 进行中。
    *
    * @return string|null
    */
    public function getBlueprintStatus()
    {
        return $this->container['blueprintStatus'];
    }

    /**
    * Sets blueprintStatus
    *
    * @param string|null $blueprintStatus 模板部署状态，包括失败, 完成, 进行中。
    *
    * @return $this
    */
    public function setBlueprintStatus($blueprintStatus)
    {
        $this->container['blueprintStatus'] = $blueprintStatus;
        return $this;
    }

    /**
    * Gets blueprintProductImplType
    *  模板实现类型。
    *
    * @return string|null
    */
    public function getBlueprintProductImplType()
    {
        return $this->container['blueprintProductImplType'];
    }

    /**
    * Sets blueprintProductImplType
    *
    * @param string|null $blueprintProductImplType 模板实现类型。
    *
    * @return $this
    */
    public function setBlueprintProductImplType($blueprintProductImplType)
    {
        $this->container['blueprintProductImplType'] = $blueprintProductImplType;
        return $this;
    }

    /**
    * Gets blueprintProductImplDetail
    *  模板详情
    *
    * @return string|null
    */
    public function getBlueprintProductImplDetail()
    {
        return $this->container['blueprintProductImplDetail'];
    }

    /**
    * Sets blueprintProductImplDetail
    *
    * @param string|null $blueprintProductImplDetail 模板详情
    *
    * @return $this
    */
    public function setBlueprintProductImplDetail($blueprintProductImplDetail)
    {
        $this->container['blueprintProductImplDetail'] = $blueprintProductImplDetail;
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

