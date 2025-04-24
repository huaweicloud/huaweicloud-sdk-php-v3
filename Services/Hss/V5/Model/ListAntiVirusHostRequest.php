<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAntiVirusHostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAntiVirusHostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * hostId  服务器ID
    * hostName  服务器名称
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * groupId  服务器组ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    * policyId  策略ID
    * nextStartTime  下次启动时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostId' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'groupId' => 'string',
            'scanType' => 'string',
            'startType' => 'string',
            'policyId' => 'string',
            'nextStartTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * hostId  服务器ID
    * hostName  服务器名称
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * groupId  服务器组ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    * policyId  策略ID
    * nextStartTime  下次启动时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostId' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'groupId' => null,
        'scanType' => null,
        'startType' => null,
        'policyId' => null,
        'nextStartTime' => 'int64'
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
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * hostId  服务器ID
    * hostName  服务器名称
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * groupId  服务器组ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    * policyId  策略ID
    * nextStartTime  下次启动时间，毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'groupId' => 'group_id',
            'scanType' => 'scan_type',
            'startType' => 'start_type',
            'policyId' => 'policy_id',
            'nextStartTime' => 'next_start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * hostId  服务器ID
    * hostName  服务器名称
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * groupId  服务器组ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    * policyId  策略ID
    * nextStartTime  下次启动时间，毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'groupId' => 'setGroupId',
            'scanType' => 'setScanType',
            'startType' => 'setStartType',
            'policyId' => 'setPolicyId',
            'nextStartTime' => 'setNextStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * hostId  服务器ID
    * hostName  服务器名称
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * groupId  服务器组ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    * policyId  策略ID
    * nextStartTime  下次启动时间，毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'groupId' => 'getGroupId',
            'scanType' => 'getScanType',
            'startType' => 'getStartType',
            'policyId' => 'getPolicyId',
            'nextStartTime' => 'getNextStartTime'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['nextStartTime'] = isset($data['nextStartTime']) ? $data['nextStartTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['scanType'] === null) {
            $invalidProperties[] = "'scanType' can't be null";
        }
            if ((mb_strlen($this->container['scanType']) > 128)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['scanType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startType'] === null) {
            $invalidProperties[] = "'startType' can't be null";
        }
            if ((mb_strlen($this->container['startType']) > 128)) {
                $invalidProperties[] = "invalid value for 'startType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['startType']) < 0)) {
                $invalidProperties[] = "invalid value for 'startType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['nextStartTime']) && ($this->container['nextStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'nextStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['nextStartTime']) && ($this->container['nextStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'nextStartTime', must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置
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
    *  每页显示个数
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  服务器私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 服务器私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  服务器公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 服务器公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets groupId
    *  服务器组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 服务器组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets scanType
    *  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return string
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string $scanType 任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets startType
    *  启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    *
    * @return string
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string $startType 启动类型，包含如下:   - now ：立即启动   - period : 周期启动
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets nextStartTime
    *  下次启动时间，毫秒
    *
    * @return int|null
    */
    public function getNextStartTime()
    {
        return $this->container['nextStartTime'];
    }

    /**
    * Sets nextStartTime
    *
    * @param int|null $nextStartTime 下次启动时间，毫秒
    *
    * @return $this
    */
    public function setNextStartTime($nextStartTime)
    {
        $this->container['nextStartTime'] = $nextStartTime;
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

