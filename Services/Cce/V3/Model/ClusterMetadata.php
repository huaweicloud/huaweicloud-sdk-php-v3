<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    * uid  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    * alias  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    * annotations  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    * labels  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    * creationTimestamp  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateTimestamp  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timezone  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'uid' => 'string',
            'alias' => 'string',
            'annotations' => 'map[string,string]',
            'labels' => 'map[string,string]',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string',
            'timezone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    * uid  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    * alias  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    * annotations  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    * labels  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    * creationTimestamp  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateTimestamp  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timezone  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'uid' => null,
        'alias' => null,
        'annotations' => null,
        'labels' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null,
        'timezone' => null
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
    * name  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    * uid  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    * alias  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    * annotations  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    * labels  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    * creationTimestamp  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateTimestamp  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timezone  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'uid' => 'uid',
            'alias' => 'alias',
            'annotations' => 'annotations',
            'labels' => 'labels',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp',
            'timezone' => 'timezone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    * uid  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    * alias  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    * annotations  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    * labels  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    * creationTimestamp  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateTimestamp  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timezone  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'uid' => 'setUid',
            'alias' => 'setAlias',
            'annotations' => 'setAnnotations',
            'labels' => 'setLabels',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp',
            'timezone' => 'setTimezone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    * uid  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    * alias  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    * annotations  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    * labels  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    * creationTimestamp  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateTimestamp  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * timezone  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'uid' => 'getUid',
            'alias' => 'getAlias',
            'annotations' => 'getAnnotations',
            'labels' => 'getLabels',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp',
            'timezone' => 'getTimezone'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['uid']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['uid'])) {
                $invalidProperties[] = "invalid value for 'uid', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 128)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 4)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 4.";
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
    * Gets name
    *  集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 集群名称。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets uid
    *  集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 集群ID，资源唯一标识，创建成功后自动生成，填写无效。在创建包周期集群时，响应体不返回集群ID。
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets alias
    *  集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 集群显示名，用于在 CCE 界面显示，该名称创建后可修改。  命名规则：以小写字母开头，由小写字母、数字、中划线(-)组成，长度范围4-128位，且不能以中划线(-)结尾。  显示名和其他集群的名称、显示名不可以重复。  在创建集群、更新集群请求体中，集群显示名alias未指定或取值为空，表示与集群名称name一致。在查询集群等响应体中，集群显示名alias将必然返回，未配置时将返回集群名称name。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets annotations
    *  **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations **参数解释：** 集群注解，由key/value组成：  ``` \"annotations\": {    \"key1\" : \"value1\",    \"key2\" : \"value2\" } ``` **约束限制：** 该字段不会被数据库保存，当前仅用于指定集群待安装插件。 **取值范围：** 不涉及 **默认取值：** 不涉及  >    - Annotations不用于标识和选择对象。Annotations中的元数据可以是small或large，structured或unstructured，并且可以包括标签不允许使用的字符。 >    - 可通过加入\"cluster.install.addons.external/install\": \"[{\\\\\"addonTemplateName\\\\\":\\\\\"icagent\\\\\"}]\"的键值对在创建集群时安装ICAgent。
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets labels
    *  集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels 集群标签，key/value对格式。  >  该字段值由系统自动生成，用于升级时前端识别集群支持的特性开关，用户指定无效。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp **参数解释：** 集群创建时间。 **约束限制：** 创建集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp **参数解释：** 集群更新时间。 **约束限制：** 更新集群时自动记录，不支持传入。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets timezone
    *  **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone **参数解释：** 集群时区。[IANA Time Zone Database](https://www.iana.org/time-zones)中收录的时区名称, 例如：\"Asia/Shanghai\"。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
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

