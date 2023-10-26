<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentTargets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'deployment_targets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regions' => 'string[]',
            'domainIds' => 'string[]',
            'domainIdsUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regions' => null,
        'domainIds' => null,
        'domainIdsUri' => null
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
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regions' => 'regions',
            'domainIds' => 'domain_ids',
            'domainIdsUri' => 'domain_ids_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'regions' => 'setRegions',
            'domainIds' => 'setDomainIds',
            'domainIdsUri' => 'setDomainIdsUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'regions' => 'getRegions',
            'domainIds' => 'getDomainIds',
            'domainIdsUri' => 'getDomainIdsUri'
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
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['domainIds'] = isset($data['domainIds']) ? $data['domainIds'] : null;
        $this->container['domainIdsUri'] = isset($data['domainIdsUri']) ? $data['domainIdsUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
        }
            if (!is_null($this->container['domainIdsUri']) && (mb_strlen($this->container['domainIdsUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['domainIdsUri']) && (mb_strlen($this->container['domainIdsUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainIdsUri']) && !preg_match("/^(http|https):\/\/[\\S]*(\\.csv){1}(\\?[\\S]+)?$/", $this->container['domainIdsUri'])) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(\\.csv){1}(\\?[\\S]+)?$/.";
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
    * Gets regions
    *  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    *
    * @return string[]
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[] $regions 用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets domainIds
    *  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    *
    * @return string[]|null
    */
    public function getDomainIds()
    {
        return $this->container['domainIds'];
    }

    /**
    * Sets domainIds
    *
    * @param string[]|null $domainIds 权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri 有且仅有一个存在。
    *
    * @return $this
    */
    public function setDomainIds($domainIds)
    {
        $this->container['domainIds'] = $domainIds;
        return $this;
    }

    /**
    * Gets domainIdsUri
    *  权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @return string|null
    */
    public function getDomainIdsUri()
    {
        return $this->container['domainIdsUri'];
    }

    /**
    * Sets domainIdsUri
    *
    * @param string|null $domainIdsUri 权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分割，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @return $this
    */
    public function setDomainIdsUri($domainIdsUri)
    {
        $this->container['domainIdsUri'] = $domainIdsUri;
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

