<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManagedAccountResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManagedAccountResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * landingZoneVersion  纳管账号的Landing Zone版本。
    * manageAccountId  管理员账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * accountType  纳管账号类型。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * state  纳管账号状态。
    * message  错误状态描述信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * identityStoreUserName  Identity Center用户名。
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    * regions  区域信息。
    * createdAt  纳管账号的创建时间。
    * updatedAt  纳管账号的更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'landingZoneVersion' => 'string',
            'manageAccountId' => 'string',
            'accountId' => 'string',
            'accountName' => 'string',
            'accountType' => 'string',
            'owner' => 'string',
            'state' => 'string',
            'message' => 'string',
            'parentOrganizationalUnitId' => 'string',
            'parentOrganizationalUnitName' => 'string',
            'identityStoreUserName' => 'string',
            'blueprintProductId' => 'string',
            'blueprintProductVersion' => 'string',
            'blueprintStatus' => 'string',
            'isBlueprintHasMultiAccountResource' => 'bool',
            'regions' => '\HuaweiCloud\SDK\Rgc\V1\Model\RegionManagedList[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * landingZoneVersion  纳管账号的Landing Zone版本。
    * manageAccountId  管理员账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * accountType  纳管账号类型。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * state  纳管账号状态。
    * message  错误状态描述信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * identityStoreUserName  Identity Center用户名。
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    * regions  区域信息。
    * createdAt  纳管账号的创建时间。
    * updatedAt  纳管账号的更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'landingZoneVersion' => null,
        'manageAccountId' => null,
        'accountId' => null,
        'accountName' => null,
        'accountType' => null,
        'owner' => null,
        'state' => null,
        'message' => null,
        'parentOrganizationalUnitId' => null,
        'parentOrganizationalUnitName' => null,
        'identityStoreUserName' => null,
        'blueprintProductId' => null,
        'blueprintProductVersion' => null,
        'blueprintStatus' => null,
        'isBlueprintHasMultiAccountResource' => null,
        'regions' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * landingZoneVersion  纳管账号的Landing Zone版本。
    * manageAccountId  管理员账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * accountType  纳管账号类型。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * state  纳管账号状态。
    * message  错误状态描述信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * identityStoreUserName  Identity Center用户名。
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    * regions  区域信息。
    * createdAt  纳管账号的创建时间。
    * updatedAt  纳管账号的更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'landingZoneVersion' => 'landing_zone_version',
            'manageAccountId' => 'manage_account_id',
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'accountType' => 'account_type',
            'owner' => 'owner',
            'state' => 'state',
            'message' => 'message',
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'parentOrganizationalUnitName' => 'parent_organizational_unit_name',
            'identityStoreUserName' => 'identity_store_user_name',
            'blueprintProductId' => 'blueprint_product_id',
            'blueprintProductVersion' => 'blueprint_product_version',
            'blueprintStatus' => 'blueprint_status',
            'isBlueprintHasMultiAccountResource' => 'is_blueprint_has_multi_account_resource',
            'regions' => 'regions',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * landingZoneVersion  纳管账号的Landing Zone版本。
    * manageAccountId  管理员账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * accountType  纳管账号类型。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * state  纳管账号状态。
    * message  错误状态描述信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * identityStoreUserName  Identity Center用户名。
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    * regions  区域信息。
    * createdAt  纳管账号的创建时间。
    * updatedAt  纳管账号的更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'landingZoneVersion' => 'setLandingZoneVersion',
            'manageAccountId' => 'setManageAccountId',
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'accountType' => 'setAccountType',
            'owner' => 'setOwner',
            'state' => 'setState',
            'message' => 'setMessage',
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'setParentOrganizationalUnitName',
            'identityStoreUserName' => 'setIdentityStoreUserName',
            'blueprintProductId' => 'setBlueprintProductId',
            'blueprintProductVersion' => 'setBlueprintProductVersion',
            'blueprintStatus' => 'setBlueprintStatus',
            'isBlueprintHasMultiAccountResource' => 'setIsBlueprintHasMultiAccountResource',
            'regions' => 'setRegions',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * landingZoneVersion  纳管账号的Landing Zone版本。
    * manageAccountId  管理员账号ID。
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * accountType  纳管账号类型。
    * owner  纳管账号的创建来源，包括CUSTOM和RGC。
    * state  纳管账号状态。
    * message  错误状态描述信息。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * identityStoreUserName  Identity Center用户名。
    * blueprintProductId  模板ID。
    * blueprintProductVersion  模板版本。
    * blueprintStatus  模板部署状态，包括失败, 完成, 进行中。
    * isBlueprintHasMultiAccountResource  模板是否包含多账号资源。
    * regions  区域信息。
    * createdAt  纳管账号的创建时间。
    * updatedAt  纳管账号的更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'landingZoneVersion' => 'getLandingZoneVersion',
            'manageAccountId' => 'getManageAccountId',
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'accountType' => 'getAccountType',
            'owner' => 'getOwner',
            'state' => 'getState',
            'message' => 'getMessage',
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'getParentOrganizationalUnitName',
            'identityStoreUserName' => 'getIdentityStoreUserName',
            'blueprintProductId' => 'getBlueprintProductId',
            'blueprintProductVersion' => 'getBlueprintProductVersion',
            'blueprintStatus' => 'getBlueprintStatus',
            'isBlueprintHasMultiAccountResource' => 'getIsBlueprintHasMultiAccountResource',
            'regions' => 'getRegions',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['landingZoneVersion'] = isset($data['landingZoneVersion']) ? $data['landingZoneVersion'] : null;
        $this->container['manageAccountId'] = isset($data['manageAccountId']) ? $data['manageAccountId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['parentOrganizationalUnitName'] = isset($data['parentOrganizationalUnitName']) ? $data['parentOrganizationalUnitName'] : null;
        $this->container['identityStoreUserName'] = isset($data['identityStoreUserName']) ? $data['identityStoreUserName'] : null;
        $this->container['blueprintProductId'] = isset($data['blueprintProductId']) ? $data['blueprintProductId'] : null;
        $this->container['blueprintProductVersion'] = isset($data['blueprintProductVersion']) ? $data['blueprintProductVersion'] : null;
        $this->container['blueprintStatus'] = isset($data['blueprintStatus']) ? $data['blueprintStatus'] : null;
        $this->container['isBlueprintHasMultiAccountResource'] = isset($data['isBlueprintHasMultiAccountResource']) ? $data['isBlueprintHasMultiAccountResource'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['landingZoneVersion']) && (mb_strlen($this->container['landingZoneVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'landingZoneVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['landingZoneVersion']) && (mb_strlen($this->container['landingZoneVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'landingZoneVersion', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountType']) && (mb_strlen($this->container['accountType']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 64)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 1)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 64)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitName']) && (mb_strlen($this->container['parentOrganizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentOrganizationalUnitName']) && (mb_strlen($this->container['parentOrganizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identityStoreUserName']) && (mb_strlen($this->container['identityStoreUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'identityStoreUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['identityStoreUserName']) && (mb_strlen($this->container['identityStoreUserName']) < 2)) {
                $invalidProperties[] = "invalid value for 'identityStoreUserName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) > 128)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blueprintProductId']) && (mb_strlen($this->container['blueprintProductId']) < 1)) {
                $invalidProperties[] = "invalid value for 'blueprintProductId', the character length must be bigger than or equal to 1.";
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
    * Gets landingZoneVersion
    *  纳管账号的Landing Zone版本。
    *
    * @return string|null
    */
    public function getLandingZoneVersion()
    {
        return $this->container['landingZoneVersion'];
    }

    /**
    * Sets landingZoneVersion
    *
    * @param string|null $landingZoneVersion 纳管账号的Landing Zone版本。
    *
    * @return $this
    */
    public function setLandingZoneVersion($landingZoneVersion)
    {
        $this->container['landingZoneVersion'] = $landingZoneVersion;
        return $this;
    }

    /**
    * Gets manageAccountId
    *  管理员账号ID。
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
    * @param string|null $manageAccountId 管理员账号ID。
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
    * Gets accountType
    *  纳管账号类型。
    *
    * @return string|null
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string|null $accountType 纳管账号类型。
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
        return $this;
    }

    /**
    * Gets owner
    *  纳管账号的创建来源，包括CUSTOM和RGC。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 纳管账号的创建来源，包括CUSTOM和RGC。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets state
    *  纳管账号状态。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 纳管账号状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets message
    *  错误状态描述信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 错误状态描述信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitId
    *  父注册OU ID。
    *
    * @return string|null
    */
    public function getParentOrganizationalUnitId()
    {
        return $this->container['parentOrganizationalUnitId'];
    }

    /**
    * Sets parentOrganizationalUnitId
    *
    * @param string|null $parentOrganizationalUnitId 父注册OU ID。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitId($parentOrganizationalUnitId)
    {
        $this->container['parentOrganizationalUnitId'] = $parentOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitName
    *  父注册OU名称。
    *
    * @return string|null
    */
    public function getParentOrganizationalUnitName()
    {
        return $this->container['parentOrganizationalUnitName'];
    }

    /**
    * Sets parentOrganizationalUnitName
    *
    * @param string|null $parentOrganizationalUnitName 父注册OU名称。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitName($parentOrganizationalUnitName)
    {
        $this->container['parentOrganizationalUnitName'] = $parentOrganizationalUnitName;
        return $this;
    }

    /**
    * Gets identityStoreUserName
    *  Identity Center用户名。
    *
    * @return string|null
    */
    public function getIdentityStoreUserName()
    {
        return $this->container['identityStoreUserName'];
    }

    /**
    * Sets identityStoreUserName
    *
    * @param string|null $identityStoreUserName Identity Center用户名。
    *
    * @return $this
    */
    public function setIdentityStoreUserName($identityStoreUserName)
    {
        $this->container['identityStoreUserName'] = $identityStoreUserName;
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
    * Gets isBlueprintHasMultiAccountResource
    *  模板是否包含多账号资源。
    *
    * @return bool|null
    */
    public function getIsBlueprintHasMultiAccountResource()
    {
        return $this->container['isBlueprintHasMultiAccountResource'];
    }

    /**
    * Sets isBlueprintHasMultiAccountResource
    *
    * @param bool|null $isBlueprintHasMultiAccountResource 模板是否包含多账号资源。
    *
    * @return $this
    */
    public function setIsBlueprintHasMultiAccountResource($isBlueprintHasMultiAccountResource)
    {
        $this->container['isBlueprintHasMultiAccountResource'] = $isBlueprintHasMultiAccountResource;
        return $this;
    }

    /**
    * Gets regions
    *  区域信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\RegionManagedList[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\RegionManagedList[]|null $regions 区域信息。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets createdAt
    *  纳管账号的创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 纳管账号的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  纳管账号的更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 纳管账号的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

