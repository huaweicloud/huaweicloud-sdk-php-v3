<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLocalImageVulRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLocalImageVulRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * repairNecessity  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'repairNecessity' => 'string',
            'imageId' => 'string',
            'vulId' => 'string',
            'appName' => 'string',
            'type' => 'string',
            'handleStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * repairNecessity  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'repairNecessity' => null,
        'imageId' => null,
        'vulId' => null,
        'appName' => null,
        'type' => null,
        'handleStatus' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * repairNecessity  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'repairNecessity' => 'repair_necessity',
            'imageId' => 'image_id',
            'vulId' => 'vul_id',
            'appName' => 'app_name',
            'type' => 'type',
            'handleStatus' => 'handle_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * repairNecessity  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'repairNecessity' => 'setRepairNecessity',
            'imageId' => 'setImageId',
            'vulId' => 'setVulId',
            'appName' => 'setAppName',
            'type' => 'setType',
            'handleStatus' => 'setHandleStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * repairNecessity  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    * imageId  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'repairNecessity' => 'getRepairNecessity',
            'imageId' => 'getImageId',
            'vulId' => 'getVulId',
            'appName' => 'getAppName',
            'type' => 'getType',
            'handleStatus' => 'getHandleStatus'
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
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
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
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity **参数解释**: 修复紧急度 **约束限制**: 不涉及 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**: 镜像ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
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
    * @param string|null $type **参数解释**: 漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - app_vul：应用漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: 包含如下:   - unhandled：未处理   - handled：已处理  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
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

