<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Statement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Statement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sid  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    * effect  Statement语句的效果。“Allow”或者“Deny”。
    * principal  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * notPrincipal  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * action  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    * notAction  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    * resource  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    * notResource  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sid' => 'string',
            'effect' => 'string',
            'principal' => 'string',
            'notPrincipal' => 'string',
            'action' => 'string',
            'notAction' => 'string',
            'resource' => 'string',
            'notResource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sid  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    * effect  Statement语句的效果。“Allow”或者“Deny”。
    * principal  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * notPrincipal  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * action  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    * notAction  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    * resource  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    * notResource  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sid' => null,
        'effect' => null,
        'principal' => null,
        'notPrincipal' => null,
        'action' => null,
        'notAction' => null,
        'resource' => null,
        'notResource' => null
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
    * sid  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    * effect  Statement语句的效果。“Allow”或者“Deny”。
    * principal  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * notPrincipal  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * action  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    * notAction  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    * resource  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    * notResource  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sid' => 'Sid',
            'effect' => 'Effect',
            'principal' => 'Principal',
            'notPrincipal' => 'NotPrincipal',
            'action' => 'Action',
            'notAction' => 'NotAction',
            'resource' => 'Resource',
            'notResource' => 'NotResource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sid  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    * effect  Statement语句的效果。“Allow”或者“Deny”。
    * principal  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * notPrincipal  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * action  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    * notAction  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    * resource  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    * notResource  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @var string[]
    */
    protected static $setters = [
            'sid' => 'setSid',
            'effect' => 'setEffect',
            'principal' => 'setPrincipal',
            'notPrincipal' => 'setNotPrincipal',
            'action' => 'setAction',
            'notAction' => 'setNotAction',
            'resource' => 'setResource',
            'notResource' => 'setNotResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sid  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    * effect  Statement语句的效果。“Allow”或者“Deny”。
    * principal  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * notPrincipal  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    * action  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    * notAction  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    * resource  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    * notResource  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @var string[]
    */
    protected static $getters = [
            'sid' => 'getSid',
            'effect' => 'getEffect',
            'principal' => 'getPrincipal',
            'notPrincipal' => 'getNotPrincipal',
            'action' => 'getAction',
            'notAction' => 'getNotAction',
            'resource' => 'getResource',
            'notResource' => 'getNotResource'
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
        $this->container['sid'] = isset($data['sid']) ? $data['sid'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['notPrincipal'] = isset($data['notPrincipal']) ? $data['notPrincipal'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['notAction'] = isset($data['notAction']) ? $data['notAction'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['notResource'] = isset($data['notResource']) ? $data['notResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sid'] === null) {
            $invalidProperties[] = "'sid' can't be null";
        }
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
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
    * Gets sid
    *  Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    *
    * @return string
    */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
    * Sets sid
    *
    * @param string $sid Statement语句的ID。 Statement语句ID必须是唯一的，例如statement01、statement02。
    *
    * @return $this
    */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;
        return $this;
    }

    /**
    * Gets effect
    *  Statement语句的效果。“Allow”或者“Deny”。
    *
    * @return string
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string $effect Statement语句的效果。“Allow”或者“Deny”。
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets principal
    *  Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    *
    * @return string|null
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param string|null $principal Statement语句作用的对象。 目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets notPrincipal
    *  NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    *
    * @return string|null
    */
    public function getNotPrincipal()
    {
        return $this->container['notPrincipal'];
    }

    /**
    * Sets notPrincipal
    *
    * @param string|null $notPrincipal NotPrincipal：Statement语句排除作用的对象。  目前支持“CSP”和“Service”两类对象。  “CSP”对象指的是其他用户，可以作用于多个用户。  “Service”对象指的是云服务，可以作用于多个云服务。  Principal元素和NotPrincipal元素两者任选其一。选定后， “CSP”对象填写内容的格式为urn:csp:iam::domainId:root，其中domainId为其他用户的“账号ID”。  “Service”对象填写内容的格式为小写的云服务名称缩写。
    *
    * @return $this
    */
    public function setNotPrincipal($notPrincipal)
    {
        $this->container['notPrincipal'] = $notPrincipal;
        return $this;
    }

    /**
    * Gets action
    *  Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action Statement语句作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic SMN:DeleteTopic SMN:QueryTopicDetail SMN:ListTopicAttributes SMN:UpdateTopicAttribute SMN:DeleteTopicAttributes SMN:DeleteTopicAttributeByName SMN:ListSubscriptionsByTopic SMN:Subscribe SMN:Unsubscribe SMN:Publish
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets notAction
    *  Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    *
    * @return string|null
    */
    public function getNotAction()
    {
        return $this->container['notAction'];
    }

    /**
    * Sets notAction
    *
    * @param string|null $notAction Statement语句排除作用的操作。  允许使用通配符来表示一类操作，例如：SMN:Update*、SMN:Delete*。如果只填写“*”，表示Statement语句作用的操作为该资源支持的所有操作。  Action元素和NotAction元素两者任选其一。  目前支持的操作有：  SMN:UpdateTopic  SMN:DeleteTopic  SMN:QueryTopicDetail  SMN:ListTopicAttributes  SMN:UpdateTopicAttribute  SMN:DeleteTopicAttributes  SMN:DeleteTopicAttributeByName  SMN:ListSubscriptionsByTopic  SMN:Subscribe  SMN:Unsubscribe  SMN:Publish
    *
    * @return $this
    */
    public function setNotAction($notAction)
    {
        $this->container['notAction'] = $notAction;
        return $this;
    }

    /**
    * Gets resource
    *  Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource Statement语句作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets notResource
    *  Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @return string|null
    */
    public function getNotResource()
    {
        return $this->container['notResource'];
    }

    /**
    * Sets notResource
    *
    * @param string|null $notResource Statement语句排除作用的主题。  Resource和NotResource两者任选其一。选定后，填写内容为主题URN。
    *
    * @return $this
    */
    public function setNotResource($notResource)
    {
        $this->container['notResource'] = $notResource;
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

