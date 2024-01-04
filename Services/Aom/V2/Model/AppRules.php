<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    * enable  true、false 规则是否启用。
    * eventName  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    * hostid  主机ID（暂不使用，传空即可）。
    * id  创建时填空，修改时填规则ID。
    * name  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    * projectid  租户从IAM申请到的projectid，一般为32位字符串。
    * spec  spec
    * desc  自定义描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'enable' => 'bool',
            'eventName' => 'string',
            'hostid' => 'string[]',
            'id' => 'string',
            'name' => 'string',
            'projectid' => 'string',
            'spec' => '\HuaweiCloud\SDK\Aom\V2\Model\AppRulesSpec',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    * enable  true、false 规则是否启用。
    * eventName  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    * hostid  主机ID（暂不使用，传空即可）。
    * id  创建时填空，修改时填规则ID。
    * name  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    * projectid  租户从IAM申请到的projectid，一般为32位字符串。
    * spec  spec
    * desc  自定义描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'enable' => null,
        'eventName' => null,
        'hostid' => null,
        'id' => null,
        'name' => null,
        'projectid' => null,
        'spec' => null,
        'desc' => null
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
    * createTime  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    * enable  true、false 规则是否启用。
    * eventName  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    * hostid  主机ID（暂不使用，传空即可）。
    * id  创建时填空，修改时填规则ID。
    * name  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    * projectid  租户从IAM申请到的projectid，一般为32位字符串。
    * spec  spec
    * desc  自定义描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'createTime',
            'enable' => 'enable',
            'eventName' => 'eventName',
            'hostid' => 'hostid',
            'id' => 'id',
            'name' => 'name',
            'projectid' => 'projectid',
            'spec' => 'spec',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    * enable  true、false 规则是否启用。
    * eventName  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    * hostid  主机ID（暂不使用，传空即可）。
    * id  创建时填空，修改时填规则ID。
    * name  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    * projectid  租户从IAM申请到的projectid，一般为32位字符串。
    * spec  spec
    * desc  自定义描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'enable' => 'setEnable',
            'eventName' => 'setEventName',
            'hostid' => 'setHostid',
            'id' => 'setId',
            'name' => 'setName',
            'projectid' => 'setProjectid',
            'spec' => 'setSpec',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    * enable  true、false 规则是否启用。
    * eventName  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    * hostid  主机ID（暂不使用，传空即可）。
    * id  创建时填空，修改时填规则ID。
    * name  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    * projectid  租户从IAM申请到的projectid，一般为32位字符串。
    * spec  spec
    * desc  自定义描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'enable' => 'getEnable',
            'eventName' => 'getEventName',
            'hostid' => 'getHostid',
            'id' => 'getId',
            'name' => 'getName',
            'projectid' => 'getProjectid',
            'spec' => 'getSpec',
            'desc' => 'getDesc'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['hostid'] = isset($data['hostid']) ? $data['hostid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectid'] = isset($data['projectid']) ? $data['projectid'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectid'] === null) {
            $invalidProperties[] = "'projectid' can't be null";
        }
        if ($this->container['spec'] === null) {
            $invalidProperties[] = "'spec' can't be null";
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
    * Gets createTime
    *  规则创建时间(创建时不传，修改时传查询返回的createTime)。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 规则创建时间(创建时不传，修改时传查询返回的createTime)。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enable
    *  true、false 规则是否启用。
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable true、false 规则是否启用。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets eventName
    *  aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName aom_inventory_rules_event规则事件名称，对于服务发现固定为\"aom_inventory_rules_event\"。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets hostid
    *  主机ID（暂不使用，传空即可）。
    *
    * @return string[]|null
    */
    public function getHostid()
    {
        return $this->container['hostid'];
    }

    /**
    * Sets hostid
    *
    * @param string[]|null $hostid 主机ID（暂不使用，传空即可）。
    *
    * @return $this
    */
    public function setHostid($hostid)
    {
        $this->container['hostid'] = $hostid;
        return $this;
    }

    /**
    * Gets id
    *  创建时填空，修改时填规则ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 创建时填空，修改时填规则ID。
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
    *  规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
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
    * @param string $name 规则名称。 字符长度为4到63位，以小写字母a-z开头，只能包含0-9/a-z/-，不能以-结尾。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectid
    *  租户从IAM申请到的projectid，一般为32位字符串。
    *
    * @return string
    */
    public function getProjectid()
    {
        return $this->container['projectid'];
    }

    /**
    * Sets projectid
    *
    * @param string $projectid 租户从IAM申请到的projectid，一般为32位字符串。
    *
    * @return $this
    */
    public function setProjectid($projectid)
    {
        $this->container['projectid'] = $projectid;
        return $this;
    }

    /**
    * Gets spec
    *  spec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AppRulesSpec
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AppRulesSpec $spec spec
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets desc
    *  自定义描述信息
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 自定义描述信息
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

