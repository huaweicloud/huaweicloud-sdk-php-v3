<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreviewAgencyLogAccessReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreviewAgencyLogAccessReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agencyAccessType  日志访问类型
    * agencyLogAccess  跨账号日志接入配置名称
    * logAgencyStreamName  委托日志流名称
    * logAgencyStreamId  委托日志流id
    * logAgencyGroupName  委托日志组名称
    * logAgencyGroupId  委托日志组id
    * logBeAgencystreamName  被委托日志流名称
    * logBeAgencystreamId  被委托日志流id
    * logBeAgencygroupName  被委托日志组名称
    * logBeAgencygroupId  被委托日志组id
    * beAgencyProjectId  被委托项目id
    * agencyProjectId  委托项目id
    * agencyDomainName  委托账号名称
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyAccessType' => 'string',
            'agencyLogAccess' => 'string',
            'logAgencyStreamName' => 'string',
            'logAgencyStreamId' => 'string',
            'logAgencyGroupName' => 'string',
            'logAgencyGroupId' => 'string',
            'logBeAgencystreamName' => 'string',
            'logBeAgencystreamId' => 'string',
            'logBeAgencygroupName' => 'string',
            'logBeAgencygroupId' => 'string',
            'beAgencyProjectId' => 'string',
            'agencyProjectId' => 'string',
            'agencyDomainName' => 'string',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agencyAccessType  日志访问类型
    * agencyLogAccess  跨账号日志接入配置名称
    * logAgencyStreamName  委托日志流名称
    * logAgencyStreamId  委托日志流id
    * logAgencyGroupName  委托日志组名称
    * logAgencyGroupId  委托日志组id
    * logBeAgencystreamName  被委托日志流名称
    * logBeAgencystreamId  被委托日志流id
    * logBeAgencygroupName  被委托日志组名称
    * logBeAgencygroupId  被委托日志组id
    * beAgencyProjectId  被委托项目id
    * agencyProjectId  委托项目id
    * agencyDomainName  委托账号名称
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyAccessType' => null,
        'agencyLogAccess' => null,
        'logAgencyStreamName' => null,
        'logAgencyStreamId' => null,
        'logAgencyGroupName' => null,
        'logAgencyGroupId' => null,
        'logBeAgencystreamName' => null,
        'logBeAgencystreamId' => null,
        'logBeAgencygroupName' => null,
        'logBeAgencygroupId' => null,
        'beAgencyProjectId' => null,
        'agencyProjectId' => null,
        'agencyDomainName' => null,
        'agencyName' => null
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
    * agencyAccessType  日志访问类型
    * agencyLogAccess  跨账号日志接入配置名称
    * logAgencyStreamName  委托日志流名称
    * logAgencyStreamId  委托日志流id
    * logAgencyGroupName  委托日志组名称
    * logAgencyGroupId  委托日志组id
    * logBeAgencystreamName  被委托日志流名称
    * logBeAgencystreamId  被委托日志流id
    * logBeAgencygroupName  被委托日志组名称
    * logBeAgencygroupId  被委托日志组id
    * beAgencyProjectId  被委托项目id
    * agencyProjectId  委托项目id
    * agencyDomainName  委托账号名称
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyAccessType' => 'agency_access_type',
            'agencyLogAccess' => 'agency_log_access',
            'logAgencyStreamName' => 'log_agencyStream_name',
            'logAgencyStreamId' => 'log_agencyStream_id',
            'logAgencyGroupName' => 'log_agencyGroup_name',
            'logAgencyGroupId' => 'log_agencyGroup_id',
            'logBeAgencystreamName' => 'log_beAgencystream_name',
            'logBeAgencystreamId' => 'log_beAgencystream_id',
            'logBeAgencygroupName' => 'log_beAgencygroup_name',
            'logBeAgencygroupId' => 'log_beAgencygroup_id',
            'beAgencyProjectId' => 'be_agency_project_id',
            'agencyProjectId' => 'agency_project_id',
            'agencyDomainName' => 'agency_domain_name',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agencyAccessType  日志访问类型
    * agencyLogAccess  跨账号日志接入配置名称
    * logAgencyStreamName  委托日志流名称
    * logAgencyStreamId  委托日志流id
    * logAgencyGroupName  委托日志组名称
    * logAgencyGroupId  委托日志组id
    * logBeAgencystreamName  被委托日志流名称
    * logBeAgencystreamId  被委托日志流id
    * logBeAgencygroupName  被委托日志组名称
    * logBeAgencygroupId  被委托日志组id
    * beAgencyProjectId  被委托项目id
    * agencyProjectId  委托项目id
    * agencyDomainName  委托账号名称
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyAccessType' => 'setAgencyAccessType',
            'agencyLogAccess' => 'setAgencyLogAccess',
            'logAgencyStreamName' => 'setLogAgencyStreamName',
            'logAgencyStreamId' => 'setLogAgencyStreamId',
            'logAgencyGroupName' => 'setLogAgencyGroupName',
            'logAgencyGroupId' => 'setLogAgencyGroupId',
            'logBeAgencystreamName' => 'setLogBeAgencystreamName',
            'logBeAgencystreamId' => 'setLogBeAgencystreamId',
            'logBeAgencygroupName' => 'setLogBeAgencygroupName',
            'logBeAgencygroupId' => 'setLogBeAgencygroupId',
            'beAgencyProjectId' => 'setBeAgencyProjectId',
            'agencyProjectId' => 'setAgencyProjectId',
            'agencyDomainName' => 'setAgencyDomainName',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agencyAccessType  日志访问类型
    * agencyLogAccess  跨账号日志接入配置名称
    * logAgencyStreamName  委托日志流名称
    * logAgencyStreamId  委托日志流id
    * logAgencyGroupName  委托日志组名称
    * logAgencyGroupId  委托日志组id
    * logBeAgencystreamName  被委托日志流名称
    * logBeAgencystreamId  被委托日志流id
    * logBeAgencygroupName  被委托日志组名称
    * logBeAgencygroupId  被委托日志组id
    * beAgencyProjectId  被委托项目id
    * agencyProjectId  委托项目id
    * agencyDomainName  委托账号名称
    * agencyName  委托名称
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyAccessType' => 'getAgencyAccessType',
            'agencyLogAccess' => 'getAgencyLogAccess',
            'logAgencyStreamName' => 'getLogAgencyStreamName',
            'logAgencyStreamId' => 'getLogAgencyStreamId',
            'logAgencyGroupName' => 'getLogAgencyGroupName',
            'logAgencyGroupId' => 'getLogAgencyGroupId',
            'logBeAgencystreamName' => 'getLogBeAgencystreamName',
            'logBeAgencystreamId' => 'getLogBeAgencystreamId',
            'logBeAgencygroupName' => 'getLogBeAgencygroupName',
            'logBeAgencygroupId' => 'getLogBeAgencygroupId',
            'beAgencyProjectId' => 'getBeAgencyProjectId',
            'agencyProjectId' => 'getAgencyProjectId',
            'agencyDomainName' => 'getAgencyDomainName',
            'agencyName' => 'getAgencyName'
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
    const AGENCY_ACCESS_TYPE_AGENCYACCESS = 'AGENCYACCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgencyAccessTypeAllowableValues()
    {
        return [
            self::AGENCY_ACCESS_TYPE_AGENCYACCESS,
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
        $this->container['agencyAccessType'] = isset($data['agencyAccessType']) ? $data['agencyAccessType'] : null;
        $this->container['agencyLogAccess'] = isset($data['agencyLogAccess']) ? $data['agencyLogAccess'] : null;
        $this->container['logAgencyStreamName'] = isset($data['logAgencyStreamName']) ? $data['logAgencyStreamName'] : null;
        $this->container['logAgencyStreamId'] = isset($data['logAgencyStreamId']) ? $data['logAgencyStreamId'] : null;
        $this->container['logAgencyGroupName'] = isset($data['logAgencyGroupName']) ? $data['logAgencyGroupName'] : null;
        $this->container['logAgencyGroupId'] = isset($data['logAgencyGroupId']) ? $data['logAgencyGroupId'] : null;
        $this->container['logBeAgencystreamName'] = isset($data['logBeAgencystreamName']) ? $data['logBeAgencystreamName'] : null;
        $this->container['logBeAgencystreamId'] = isset($data['logBeAgencystreamId']) ? $data['logBeAgencystreamId'] : null;
        $this->container['logBeAgencygroupName'] = isset($data['logBeAgencygroupName']) ? $data['logBeAgencygroupName'] : null;
        $this->container['logBeAgencygroupId'] = isset($data['logBeAgencygroupId']) ? $data['logBeAgencygroupId'] : null;
        $this->container['beAgencyProjectId'] = isset($data['beAgencyProjectId']) ? $data['beAgencyProjectId'] : null;
        $this->container['agencyProjectId'] = isset($data['agencyProjectId']) ? $data['agencyProjectId'] : null;
        $this->container['agencyDomainName'] = isset($data['agencyDomainName']) ? $data['agencyDomainName'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agencyAccessType'] === null) {
            $invalidProperties[] = "'agencyAccessType' can't be null";
        }
            $allowedValues = $this->getAgencyAccessTypeAllowableValues();
                if (!is_null($this->container['agencyAccessType']) && !in_array($this->container['agencyAccessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agencyAccessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['agencyLogAccess'] === null) {
            $invalidProperties[] = "'agencyLogAccess' can't be null";
        }
        if ($this->container['logAgencyStreamName'] === null) {
            $invalidProperties[] = "'logAgencyStreamName' can't be null";
        }
        if ($this->container['logAgencyStreamId'] === null) {
            $invalidProperties[] = "'logAgencyStreamId' can't be null";
        }
        if ($this->container['logAgencyGroupName'] === null) {
            $invalidProperties[] = "'logAgencyGroupName' can't be null";
        }
        if ($this->container['logAgencyGroupId'] === null) {
            $invalidProperties[] = "'logAgencyGroupId' can't be null";
        }
        if ($this->container['logBeAgencystreamName'] === null) {
            $invalidProperties[] = "'logBeAgencystreamName' can't be null";
        }
        if ($this->container['logBeAgencystreamId'] === null) {
            $invalidProperties[] = "'logBeAgencystreamId' can't be null";
        }
        if ($this->container['logBeAgencygroupName'] === null) {
            $invalidProperties[] = "'logBeAgencygroupName' can't be null";
        }
        if ($this->container['logBeAgencygroupId'] === null) {
            $invalidProperties[] = "'logBeAgencygroupId' can't be null";
        }
        if ($this->container['beAgencyProjectId'] === null) {
            $invalidProperties[] = "'beAgencyProjectId' can't be null";
        }
        if ($this->container['agencyProjectId'] === null) {
            $invalidProperties[] = "'agencyProjectId' can't be null";
        }
        if ($this->container['agencyDomainName'] === null) {
            $invalidProperties[] = "'agencyDomainName' can't be null";
        }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
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
    * Gets agencyAccessType
    *  日志访问类型
    *
    * @return string
    */
    public function getAgencyAccessType()
    {
        return $this->container['agencyAccessType'];
    }

    /**
    * Sets agencyAccessType
    *
    * @param string $agencyAccessType 日志访问类型
    *
    * @return $this
    */
    public function setAgencyAccessType($agencyAccessType)
    {
        $this->container['agencyAccessType'] = $agencyAccessType;
        return $this;
    }

    /**
    * Gets agencyLogAccess
    *  跨账号日志接入配置名称
    *
    * @return string
    */
    public function getAgencyLogAccess()
    {
        return $this->container['agencyLogAccess'];
    }

    /**
    * Sets agencyLogAccess
    *
    * @param string $agencyLogAccess 跨账号日志接入配置名称
    *
    * @return $this
    */
    public function setAgencyLogAccess($agencyLogAccess)
    {
        $this->container['agencyLogAccess'] = $agencyLogAccess;
        return $this;
    }

    /**
    * Gets logAgencyStreamName
    *  委托日志流名称
    *
    * @return string
    */
    public function getLogAgencyStreamName()
    {
        return $this->container['logAgencyStreamName'];
    }

    /**
    * Sets logAgencyStreamName
    *
    * @param string $logAgencyStreamName 委托日志流名称
    *
    * @return $this
    */
    public function setLogAgencyStreamName($logAgencyStreamName)
    {
        $this->container['logAgencyStreamName'] = $logAgencyStreamName;
        return $this;
    }

    /**
    * Gets logAgencyStreamId
    *  委托日志流id
    *
    * @return string
    */
    public function getLogAgencyStreamId()
    {
        return $this->container['logAgencyStreamId'];
    }

    /**
    * Sets logAgencyStreamId
    *
    * @param string $logAgencyStreamId 委托日志流id
    *
    * @return $this
    */
    public function setLogAgencyStreamId($logAgencyStreamId)
    {
        $this->container['logAgencyStreamId'] = $logAgencyStreamId;
        return $this;
    }

    /**
    * Gets logAgencyGroupName
    *  委托日志组名称
    *
    * @return string
    */
    public function getLogAgencyGroupName()
    {
        return $this->container['logAgencyGroupName'];
    }

    /**
    * Sets logAgencyGroupName
    *
    * @param string $logAgencyGroupName 委托日志组名称
    *
    * @return $this
    */
    public function setLogAgencyGroupName($logAgencyGroupName)
    {
        $this->container['logAgencyGroupName'] = $logAgencyGroupName;
        return $this;
    }

    /**
    * Gets logAgencyGroupId
    *  委托日志组id
    *
    * @return string
    */
    public function getLogAgencyGroupId()
    {
        return $this->container['logAgencyGroupId'];
    }

    /**
    * Sets logAgencyGroupId
    *
    * @param string $logAgencyGroupId 委托日志组id
    *
    * @return $this
    */
    public function setLogAgencyGroupId($logAgencyGroupId)
    {
        $this->container['logAgencyGroupId'] = $logAgencyGroupId;
        return $this;
    }

    /**
    * Gets logBeAgencystreamName
    *  被委托日志流名称
    *
    * @return string
    */
    public function getLogBeAgencystreamName()
    {
        return $this->container['logBeAgencystreamName'];
    }

    /**
    * Sets logBeAgencystreamName
    *
    * @param string $logBeAgencystreamName 被委托日志流名称
    *
    * @return $this
    */
    public function setLogBeAgencystreamName($logBeAgencystreamName)
    {
        $this->container['logBeAgencystreamName'] = $logBeAgencystreamName;
        return $this;
    }

    /**
    * Gets logBeAgencystreamId
    *  被委托日志流id
    *
    * @return string
    */
    public function getLogBeAgencystreamId()
    {
        return $this->container['logBeAgencystreamId'];
    }

    /**
    * Sets logBeAgencystreamId
    *
    * @param string $logBeAgencystreamId 被委托日志流id
    *
    * @return $this
    */
    public function setLogBeAgencystreamId($logBeAgencystreamId)
    {
        $this->container['logBeAgencystreamId'] = $logBeAgencystreamId;
        return $this;
    }

    /**
    * Gets logBeAgencygroupName
    *  被委托日志组名称
    *
    * @return string
    */
    public function getLogBeAgencygroupName()
    {
        return $this->container['logBeAgencygroupName'];
    }

    /**
    * Sets logBeAgencygroupName
    *
    * @param string $logBeAgencygroupName 被委托日志组名称
    *
    * @return $this
    */
    public function setLogBeAgencygroupName($logBeAgencygroupName)
    {
        $this->container['logBeAgencygroupName'] = $logBeAgencygroupName;
        return $this;
    }

    /**
    * Gets logBeAgencygroupId
    *  被委托日志组id
    *
    * @return string
    */
    public function getLogBeAgencygroupId()
    {
        return $this->container['logBeAgencygroupId'];
    }

    /**
    * Sets logBeAgencygroupId
    *
    * @param string $logBeAgencygroupId 被委托日志组id
    *
    * @return $this
    */
    public function setLogBeAgencygroupId($logBeAgencygroupId)
    {
        $this->container['logBeAgencygroupId'] = $logBeAgencygroupId;
        return $this;
    }

    /**
    * Gets beAgencyProjectId
    *  被委托项目id
    *
    * @return string
    */
    public function getBeAgencyProjectId()
    {
        return $this->container['beAgencyProjectId'];
    }

    /**
    * Sets beAgencyProjectId
    *
    * @param string $beAgencyProjectId 被委托项目id
    *
    * @return $this
    */
    public function setBeAgencyProjectId($beAgencyProjectId)
    {
        $this->container['beAgencyProjectId'] = $beAgencyProjectId;
        return $this;
    }

    /**
    * Gets agencyProjectId
    *  委托项目id
    *
    * @return string
    */
    public function getAgencyProjectId()
    {
        return $this->container['agencyProjectId'];
    }

    /**
    * Sets agencyProjectId
    *
    * @param string $agencyProjectId 委托项目id
    *
    * @return $this
    */
    public function setAgencyProjectId($agencyProjectId)
    {
        $this->container['agencyProjectId'] = $agencyProjectId;
        return $this;
    }

    /**
    * Gets agencyDomainName
    *  委托账号名称
    *
    * @return string
    */
    public function getAgencyDomainName()
    {
        return $this->container['agencyDomainName'];
    }

    /**
    * Sets agencyDomainName
    *
    * @param string $agencyDomainName 委托账号名称
    *
    * @return $this
    */
    public function setAgencyDomainName($agencyDomainName)
    {
        $this->container['agencyDomainName'] = $agencyDomainName;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

