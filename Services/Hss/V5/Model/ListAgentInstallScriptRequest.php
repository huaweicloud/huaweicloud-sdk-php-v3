<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentInstallScriptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentInstallScriptRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * osType  os类型：Windows和Linux
    * osArch  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    * outsideHost  是否非华为云
    * outsideGroupId  服务器组ID，此参数已废弃
    * batchInstall  是否批量安装
    * type  类型：password和ssh_key
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'osType' => 'string',
            'osArch' => 'string',
            'outsideHost' => 'bool',
            'outsideGroupId' => 'string',
            'batchInstall' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * osType  os类型：Windows和Linux
    * osArch  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    * outsideHost  是否非华为云
    * outsideGroupId  服务器组ID，此参数已废弃
    * batchInstall  是否批量安装
    * type  类型：password和ssh_key
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'osType' => null,
        'osArch' => null,
        'outsideHost' => null,
        'outsideGroupId' => null,
        'batchInstall' => null,
        'type' => null
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
    * region  Region ID
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * osType  os类型：Windows和Linux
    * osArch  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    * outsideHost  是否非华为云
    * outsideGroupId  服务器组ID，此参数已废弃
    * batchInstall  是否批量安装
    * type  类型：password和ssh_key
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'osType' => 'os_type',
            'osArch' => 'os_arch',
            'outsideHost' => 'outside_host',
            'outsideGroupId' => 'outside_group_id',
            'batchInstall' => 'batch_install',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  Region ID
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * osType  os类型：Windows和Linux
    * osArch  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    * outsideHost  是否非华为云
    * outsideGroupId  服务器组ID，此参数已废弃
    * batchInstall  是否批量安装
    * type  类型：password和ssh_key
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'osType' => 'setOsType',
            'osArch' => 'setOsArch',
            'outsideHost' => 'setOutsideHost',
            'outsideGroupId' => 'setOutsideGroupId',
            'batchInstall' => 'setBatchInstall',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  Region ID
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * osType  os类型：Windows和Linux
    * osArch  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    * outsideHost  是否非华为云
    * outsideGroupId  服务器组ID，此参数已废弃
    * batchInstall  是否批量安装
    * type  类型：password和ssh_key
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'osType' => 'getOsType',
            'osArch' => 'getOsArch',
            'outsideHost' => 'getOutsideHost',
            'outsideGroupId' => 'getOutsideGroupId',
            'batchInstall' => 'getBatchInstall',
            'type' => 'getType'
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
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_TYPE_LINUX = 'Linux';
    const OS_ARCH_X86_64 = 'x86_64';
    const OS_ARCH_AARCH64 = 'aarch64';
    const TYPE_PASSWORD = 'password';
    const TYPE_SSH_KEY = 'ssh_key';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsArchAllowableValues()
    {
        return [
            self::OS_ARCH_X86_64,
            self::OS_ARCH_AARCH64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PASSWORD,
            self::TYPE_SSH_KEY,
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osArch'] = isset($data['osArch']) ? $data['osArch'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
        $this->container['outsideGroupId'] = isset($data['outsideGroupId']) ? $data['outsideGroupId'] : null;
        $this->container['batchInstall'] = isset($data['batchInstall']) ? $data['batchInstall'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osArch'] === null) {
            $invalidProperties[] = "'osArch' can't be null";
        }
            $allowedValues = $this->getOsArchAllowableValues();
                if (!is_null($this->container['osArch']) && !in_array($this->container['osArch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osArch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['outsideGroupId']) && (mb_strlen($this->container['outsideGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'outsideGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['outsideGroupId']) && (mb_strlen($this->container['outsideGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'outsideGroupId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets region
    *  Region ID
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region Region ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets osType
    *  os类型：Windows和Linux
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType os类型：Windows和Linux
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osArch
    *  系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    *
    * @return string
    */
    public function getOsArch()
    {
        return $this->container['osArch'];
    }

    /**
    * Sets osArch
    *
    * @param string $osArch 系统架构：x86_64和aarch64；当os_type为Windows时，只能选择x86_64
    *
    * @return $this
    */
    public function setOsArch($osArch)
    {
        $this->container['osArch'] = $osArch;
        return $this;
    }

    /**
    * Gets outsideHost
    *  是否非华为云
    *
    * @return bool|null
    */
    public function getOutsideHost()
    {
        return $this->container['outsideHost'];
    }

    /**
    * Sets outsideHost
    *
    * @param bool|null $outsideHost 是否非华为云
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
        return $this;
    }

    /**
    * Gets outsideGroupId
    *  服务器组ID，此参数已废弃
    *
    * @return string|null
    */
    public function getOutsideGroupId()
    {
        return $this->container['outsideGroupId'];
    }

    /**
    * Sets outsideGroupId
    *
    * @param string|null $outsideGroupId 服务器组ID，此参数已废弃
    *
    * @return $this
    */
    public function setOutsideGroupId($outsideGroupId)
    {
        $this->container['outsideGroupId'] = $outsideGroupId;
        return $this;
    }

    /**
    * Gets batchInstall
    *  是否批量安装
    *
    * @return bool|null
    */
    public function getBatchInstall()
    {
        return $this->container['batchInstall'];
    }

    /**
    * Sets batchInstall
    *
    * @param bool|null $batchInstall 是否批量安装
    *
    * @return $this
    */
    public function setBatchInstall($batchInstall)
    {
        $this->container['batchInstall'] = $batchInstall;
        return $this;
    }

    /**
    * Gets type
    *  类型：password和ssh_key
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型：password和ssh_key
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

