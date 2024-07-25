<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkspaceResponseBodyWorkspaceAgencyList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkspaceResponseBody_workspace_agency_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  委托空间所属项目id
    * id  空间委托id
    * name  空间委托名称
    * regionId  委托空间所属region id
    * workspaceAttribution  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    * agencyVersion  用户创建托管空间时使用的IAM委托版本，V3或者V5
    * domainId  委托租户id
    * domainName  委托租户名称
    * iamAgencyId  iam委托id
    * iamAgencyName  iam委托名称
    * resourceSpecCode  委托空间购买版本
    * selected  是否被视图选中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'regionId' => 'string',
            'workspaceAttribution' => 'string',
            'agencyVersion' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'iamAgencyId' => 'string',
            'iamAgencyName' => 'string',
            'resourceSpecCode' => 'string[]',
            'selected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  委托空间所属项目id
    * id  空间委托id
    * name  空间委托名称
    * regionId  委托空间所属region id
    * workspaceAttribution  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    * agencyVersion  用户创建托管空间时使用的IAM委托版本，V3或者V5
    * domainId  委托租户id
    * domainName  委托租户名称
    * iamAgencyId  iam委托id
    * iamAgencyName  iam委托名称
    * resourceSpecCode  委托空间购买版本
    * selected  是否被视图选中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'name' => null,
        'regionId' => null,
        'workspaceAttribution' => null,
        'agencyVersion' => null,
        'domainId' => null,
        'domainName' => null,
        'iamAgencyId' => null,
        'iamAgencyName' => null,
        'resourceSpecCode' => null,
        'selected' => null
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
    * projectId  委托空间所属项目id
    * id  空间委托id
    * name  空间委托名称
    * regionId  委托空间所属region id
    * workspaceAttribution  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    * agencyVersion  用户创建托管空间时使用的IAM委托版本，V3或者V5
    * domainId  委托租户id
    * domainName  委托租户名称
    * iamAgencyId  iam委托id
    * iamAgencyName  iam委托名称
    * resourceSpecCode  委托空间购买版本
    * selected  是否被视图选中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'name' => 'name',
            'regionId' => 'region_id',
            'workspaceAttribution' => 'workspace_attribution',
            'agencyVersion' => 'agency_version',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'iamAgencyId' => 'iam_agency_id',
            'iamAgencyName' => 'iam_agency_name',
            'resourceSpecCode' => 'resource_spec_code',
            'selected' => 'selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  委托空间所属项目id
    * id  空间委托id
    * name  空间委托名称
    * regionId  委托空间所属region id
    * workspaceAttribution  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    * agencyVersion  用户创建托管空间时使用的IAM委托版本，V3或者V5
    * domainId  委托租户id
    * domainName  委托租户名称
    * iamAgencyId  iam委托id
    * iamAgencyName  iam委托名称
    * resourceSpecCode  委托空间购买版本
    * selected  是否被视图选中
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'workspaceAttribution' => 'setWorkspaceAttribution',
            'agencyVersion' => 'setAgencyVersion',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'iamAgencyId' => 'setIamAgencyId',
            'iamAgencyName' => 'setIamAgencyName',
            'resourceSpecCode' => 'setResourceSpecCode',
            'selected' => 'setSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  委托空间所属项目id
    * id  空间委托id
    * name  空间委托名称
    * regionId  委托空间所属region id
    * workspaceAttribution  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    * agencyVersion  用户创建托管空间时使用的IAM委托版本，V3或者V5
    * domainId  委托租户id
    * domainName  委托租户名称
    * iamAgencyId  iam委托id
    * iamAgencyName  iam委托名称
    * resourceSpecCode  委托空间购买版本
    * selected  是否被视图选中
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'workspaceAttribution' => 'getWorkspaceAttribution',
            'agencyVersion' => 'getAgencyVersion',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'iamAgencyId' => 'getIamAgencyId',
            'iamAgencyName' => 'getIamAgencyName',
            'resourceSpecCode' => 'getResourceSpecCode',
            'selected' => 'getSelected'
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
    const WORKSPACE_ATTRIBUTION_THIS_ACCOUNT = 'THIS_ACCOUNT';
    const WORKSPACE_ATTRIBUTION_CROSS_ACCOUNT = 'CROSS_ACCOUNT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWorkspaceAttributionAllowableValues()
    {
        return [
            self::WORKSPACE_ATTRIBUTION_THIS_ACCOUNT,
            self::WORKSPACE_ATTRIBUTION_CROSS_ACCOUNT,
        ];
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['workspaceAttribution'] = isset($data['workspaceAttribution']) ? $data['workspaceAttribution'] : null;
        $this->container['agencyVersion'] = isset($data['agencyVersion']) ? $data['agencyVersion'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['iamAgencyId'] = isset($data['iamAgencyId']) ? $data['iamAgencyId'] : null;
        $this->container['iamAgencyName'] = isset($data['iamAgencyName']) ? $data['iamAgencyName'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getWorkspaceAttributionAllowableValues();
                if (!is_null($this->container['workspaceAttribution']) && !in_array($this->container['workspaceAttribution'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'workspaceAttribution', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agencyVersion']) && (mb_strlen($this->container['agencyVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'agencyVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agencyVersion']) && (mb_strlen($this->container['agencyVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamAgencyId']) && (mb_strlen($this->container['iamAgencyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'iamAgencyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['iamAgencyId']) && (mb_strlen($this->container['iamAgencyId']) < 32)) {
                $invalidProperties[] = "invalid value for 'iamAgencyId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['iamAgencyName']) && (mb_strlen($this->container['iamAgencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'iamAgencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['iamAgencyName']) && (mb_strlen($this->container['iamAgencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamAgencyName', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  委托空间所属项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 委托空间所属项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  空间委托id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 空间委托id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  空间委托名称
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
    * @param string|null $name 空间委托名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  委托空间所属region id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 委托空间所属region id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets workspaceAttribution
    *  THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    *
    * @return string|null
    */
    public function getWorkspaceAttribution()
    {
        return $this->container['workspaceAttribution'];
    }

    /**
    * Sets workspaceAttribution
    *
    * @param string|null $workspaceAttribution THIS_ACCOUNT:本账号空间,CROSS_ACCOUNT:跨账号空间
    *
    * @return $this
    */
    public function setWorkspaceAttribution($workspaceAttribution)
    {
        $this->container['workspaceAttribution'] = $workspaceAttribution;
        return $this;
    }

    /**
    * Gets agencyVersion
    *  用户创建托管空间时使用的IAM委托版本，V3或者V5
    *
    * @return string|null
    */
    public function getAgencyVersion()
    {
        return $this->container['agencyVersion'];
    }

    /**
    * Sets agencyVersion
    *
    * @param string|null $agencyVersion 用户创建托管空间时使用的IAM委托版本，V3或者V5
    *
    * @return $this
    */
    public function setAgencyVersion($agencyVersion)
    {
        $this->container['agencyVersion'] = $agencyVersion;
        return $this;
    }

    /**
    * Gets domainId
    *  委托租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 委托租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  委托租户名称
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 委托租户名称
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets iamAgencyId
    *  iam委托id
    *
    * @return string|null
    */
    public function getIamAgencyId()
    {
        return $this->container['iamAgencyId'];
    }

    /**
    * Sets iamAgencyId
    *
    * @param string|null $iamAgencyId iam委托id
    *
    * @return $this
    */
    public function setIamAgencyId($iamAgencyId)
    {
        $this->container['iamAgencyId'] = $iamAgencyId;
        return $this;
    }

    /**
    * Gets iamAgencyName
    *  iam委托名称
    *
    * @return string|null
    */
    public function getIamAgencyName()
    {
        return $this->container['iamAgencyName'];
    }

    /**
    * Sets iamAgencyName
    *
    * @param string|null $iamAgencyName iam委托名称
    *
    * @return $this
    */
    public function setIamAgencyName($iamAgencyName)
    {
        $this->container['iamAgencyName'] = $iamAgencyName;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  委托空间购买版本
    *
    * @return string[]|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string[]|null $resourceSpecCode 委托空间购买版本
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets selected
    *  是否被视图选中
    *
    * @return bool|null
    */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
    * Sets selected
    *
    * @param bool|null $selected 是否被视图选中
    *
    * @return $this
    */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;
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

